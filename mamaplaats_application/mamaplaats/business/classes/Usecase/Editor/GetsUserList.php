<?php

class Usecase_Editor_GetsUserList {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function execute($search)
	{
		return $this->_repository_user->get_by_search_term($search);
	}
}