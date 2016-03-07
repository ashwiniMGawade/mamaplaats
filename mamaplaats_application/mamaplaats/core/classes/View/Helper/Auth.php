<?php

trait View_Helper_Auth {

	protected $auth_user;

	public function logged_in()
	{
		if (isset($this->auth_user))
		{
			return $this->auth_user;
		}
		return array();
	}

	public function auth_user()
	{
		return $this->auth_user;
	}

}