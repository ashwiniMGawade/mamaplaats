<?php

class Usecase_Editor_GetsUser {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Interest
	 */
	private $_repository_interest;

	public function __construct($repository_user, $repository_interest)
	{
		$this->_repository_user 	= $repository_user;
		$this->_repository_interest = $repository_interest;
	}

	public function execute($user_id)
	{
		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id)));
		$user->interests = $this->_repository_interest->load_user_interests($user_id);

		return $user;
	}
}