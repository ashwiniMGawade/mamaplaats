<?php

class Usecase_User_GetsInterests {

	/**
	 * @var Repository_Interest
	 */
	private $_repository_interest;

	public function __construct($repository_interest)
	{
		$this->_repository_interest = $repository_interest;
	}

	public function execute(Entity_User $user)
	{
		return $this->_repository_interest->load_user_interests($user->id);
	}
}