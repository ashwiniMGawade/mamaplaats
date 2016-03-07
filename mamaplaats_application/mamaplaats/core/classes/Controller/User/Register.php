<?php

class Controller_User_Register extends Controller_Base {

	public function before()
	{
		parent::before();

		if (empty($this->auth_user))
		{
			$this->redirect(Route::url('user_login'));
		}
	}
}