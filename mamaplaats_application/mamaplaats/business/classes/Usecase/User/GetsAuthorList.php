<?php

class Usecase_User_GetsAuthorList {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follow;

	public function __construct($repository_user, $repository_follow)
	{
		$this->_repository_user = $repository_user;
		$this->_repository_follow = $repository_follow;
	}

	public function execute(Entity_User $user, $first_letter)
	{
		$blogger_list = $this->_repository_user->get_author_list($first_letter);
		foreach ($blogger_list as $blogger)
		{
			$blogger->following = $this->_repository_follow->check_if_following($user->id, $blogger->id);
			$blogger_list[$blogger->id] = $blogger;
		}

		return $blogger_list;
	}
}