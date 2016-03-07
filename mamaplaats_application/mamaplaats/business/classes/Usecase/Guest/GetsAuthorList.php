<?php

class Usecase_Guest_GetsAuthorList {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function execute($first_letter)
	{
		return $this->_repository_user->get_author_list($first_letter);
	}
}