<?php

class Usecase_User_LoginSuccess {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function execute($user_id)
	{
		if(empty($user_id))
		{
			return FALSE;
		}

		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id)));

		$current_login_count = ( ! empty($user->login_count) ? $user->login_count : 0);
		$user->login_count = $current_login_count + 1;

		$this->_repository_user->update($user);
	}
} 