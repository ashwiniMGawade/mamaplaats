<?php

class Usecase_User_GetsFollowing {

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follower;

	public function __construct($repository_follower)
	{
		$this->_repository_follower = $repository_follower;
	}

	public function execute(Entity_User $user)
	{
		return $this->_repository_follower->get_following($user->id);
	}
}