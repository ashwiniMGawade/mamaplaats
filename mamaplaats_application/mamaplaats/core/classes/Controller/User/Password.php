<?php

class Controller_User_Password extends Controller_Base {

	public function action_reset()
	{
		$messages = array();
		if ($post = $this->request->post())
		{
			try
			{
				Factory_Guest::resets_password()->execute($post['username']);
				$messages = array('messages' => array('Email met herstel informatie is verstuurd.'), 'type' => 'success');
			}
			catch (Exception $e)
			{
				$messages = array('messages' => array('Geen gebruiker gevonden met de informatie.'), 'type' => 'error');
			}
		}

		$this->view = new View_User_Password_Reset($messages);
	}

	public function action_update()
	{
		$user_id 	= $this->request->query('user_id');
		$reset_key 	= $this->request->query('key');

		$messages = array();
		if ($post = $this->request->post() AND ! empty($post['password']) AND $post['password'] === $post['password_repeat'])
		{
			try
			{
				Factory_Guest::updates_password()->execute($user_id, $reset_key, $post['password']);

				$messages = array(
					'messages' => array('Je wachtwoord is aangepast. Je kan nu inloggen met je nieuwe Wachtwoord.'),
					'type' => 'success'
				);
			}
			catch (Exception $e)
			{
				$messages = array('messages' => array('We hebben geen gebruiker kunnen vinden'), 'type' => 'error');
			}
		}
		elseif ($post = $this->request->post())
		{
			if (empty($post['password']))
			{
				$messages = array('messages' => array('Wachtwoord velden moeten beide gevuld zijn.'), 'type' => 'error');
			}

			if ($post['password'] !== $post['password_repeat'])
			{
				$messages = array('messages' => array('De wachtwoorden komen niet overeen.'), 'type' => 'error');
			}
		}

		$this->view = new View_User_Password_Update($messages);
	}
}