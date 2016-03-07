<?php

class Controller_UnsubscribeNotification extends Controller_Base {

	public function action_index()
	{
		$type		= $this->request->query('type');
		$user_id	= $this->request->query('user_id');
		$hash_key	= $this->request->query('key');
		$user		= new Entity_User;

		try
		{
			$user = Factory_Guest::unsubscribe_notification()->execute($type, $user_id, $hash_key);
			$messages = array(
				'messages' => array('Je bent succesvol uitgeschreven.'),
				'type' => 'success'
			);
		}
		catch (Validate_Exception $e)
		{
			$messages = array('messages' => $e->errors, 'type' => 'error');
		}

		$this->view = new View_Unsubscribe_Index($user, $messages);
	}

	public function action_reaction()
	{
		Factory_Admin::sends_instant_comment_response()->execute('-7 days');
	}
}