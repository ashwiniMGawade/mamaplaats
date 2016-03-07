<?php

class Controller_User_Follow extends Controller_Base {

	public function before()
	{
		parent::before();

		if (empty($this->auth_user))
		{
			$this->redirect(Route::url('user_login'));
		}
	}

	public function action_suggestions()
	{

		if ($post = $this->request->post())
		{
			Factory_User::updates_following()->execute($this->auth_user, $post['following_id']);
		}

		$suggestions = Factory_User::gets_follow_suggestions()->execute($this->auth_user, 10);
		$view = new View_User_Follow_Suggestions($this->auth_user, $suggestions);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_followers()
	{
		if ($post = $this->request->post())
		{
			Factory_User::updates_following()->execute($this->auth_user, $post['following_id']);
		}

		$followers = Factory_User::gets_followers()->execute($this->auth_user);
		$view = new View_User_Follow_Followers($this->auth_user, $followers);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_following()
	{
		if ($post = $this->request->post())
		{
			Factory_User::updates_following()->execute($this->auth_user, $post['following_id']);
		}
		$following = Factory_User::gets_following()->execute($this->auth_user);
		$view = new View_User_Follow_Following($this->auth_user, $following);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_timeline()
	{
		$timeline = Factory_User::gets_timeline()->execute($this->auth_user->id, 5);
		$view = new View_User_Follow_Timeline($this->auth_user, $timeline, Kohana::$config->load('info_arrays'));

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}
}