<?php

class Usecase_User_SearchesUser {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function execute($search_term, $limit)
	{
		$search_terms = str_replace(' ', '', $search_term['term']);

		$users = $this->_repository_user->get_by_search_term($search_terms, $limit, 0);
		foreach ($users as $i => $user)
		{
			$users[$i] = array('id' => $user->id, 'full_name' => $user->full_name());
		}

		return $users;
	}
} 