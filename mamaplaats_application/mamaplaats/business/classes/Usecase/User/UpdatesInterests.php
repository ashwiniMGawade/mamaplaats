<?php

class Usecase_User_UpdatesInterests {

	/**
	 * @var Repository_Interest
	 */
	private $_repository_interest;

	public function __construct($repository_interest)
	{
		$this->_repository_interest = $repository_interest;
	}

	public function execute(Entity_User $user, array $interests)
	{
		$this->_repository_interest->update_user_interests($user->id, $interests);
	}
}