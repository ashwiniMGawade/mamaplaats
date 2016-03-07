<?php

class Usecase_Guest_UpdatesPassword {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var PasswordHash
	 */
	private $_password_hash;

	public function __construct($repository_user, $password_hash)
	{
		$this->_repository_user = $repository_user;
		$this->_password_hash	= $password_hash;
	}

	public function execute($user_id, $activation_key, $password)
	{
		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id), array('activation_key', '=', $activation_key)));
		if (empty($user) OR empty($activation_key))
		{
			throw new Exception('No user found');
		}

		// Reset the password for the user
		$this->_update_user_password($user, $password);
	}

	private function _update_user_password(Entity_User $user, $password)
	{
		$user->activation_key 	= '';
		$user->password 		= $this->_password_hash->HashPassword($password);
		$user-> status			= 1;

		$this->_repository_user->update($user);
	}
}