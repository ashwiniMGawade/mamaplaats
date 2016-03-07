<?php

class Usecase_Guest_UnsubscribeNotification {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_User
	 */
	private $_types;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;

		$this->_types	= array(
			'comment'
		);
	}

	public function execute($type, $user_id, $hash_key)
	{
		if ( ! in_array($type, $this->_types))
		{
			$this->_throw_exception();
		}

		if (empty($user_id) OR empty($hash_key))
		{
			$this->_throw_exception();
		}

		$user = $this->_repository_user->load_object(array(array('id', '=', base64_decode($user_id))));

		if (empty($user) OR $this->_is_hash_key_correct($user->id.$user->email, $hash_key))
		{
			$this->_throw_exception();
		}

		$user->comment_notification = 0;
		$user = $this->_repository_user->update($user);

		return $user;
	}

	private function _is_hash_key_correct($user, $hash_key)
	{
		return (hash('sha1', $user) != $hash_key);
	}

	private function _throw_exception()
	{
		throw new Validate_Exception('We are sorry!. But,no such user is present', array('Spijtig !. Geen dergelijke gebruiker aanwezig is'));
	}
}