<?php

class Usecase_Editor_UpdatesUser {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Interest
	 */
	private $_repository_interest;

	/**
	 * @var PasswordHash
	 */
	private $_password_hash;

	/**
	 * @var Validate_User
	 */
	private $_validate_user;

	public function __construct($repository_user, $repository_interest, $password_hash, $validate_user)
	{
		// Set the complexity and method for the password hash
		$password_hash->PasswordHash(8, TRUE);

		$this->_repository_user 	= $repository_user;
		$this->_repository_interest = $repository_interest;
		$this->_password_hash		= $password_hash;
		$this->_validate_user 		= $validate_user;
	}

	public function execute($user_id, array $fields)
	{
		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id)));
		$user->set_fields($fields);
		$this->_validate_user($user);

		if ( ! empty($fields['interests']))
		{
			$this->_repository_interest->update_user_interests($user->id, $fields['interests']);
		}

		if ( ! empty($fields['password']))
		{
			$user->password = $this->_password_hash->HashPassword($fields['password']);
		}

		return $this->_repository_user->update($user);
	}

	private function _validate_user(Entity_User $review)
	{
		$this->_validate_user->load($review->as_array());
		$this->_validate_user->default_rules();

		if ($this->_validate_user->check() !== TRUE)
		{
			throw new Validate_Exception('This review product is invalid !', $this->_validate_user->errors());
		}
	}
}