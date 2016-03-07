<?php

class Usecase_User_GetsFollowSuggestions {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follower;

	public function __construct($repository_user, $repository_follower)
	{
		$this->_repository_user = $repository_user;
		$this->_repository_follower = $repository_follower;
	}

	public function execute(Entity_User $user, $limit = 10)
	{
		$user = $this->_repository_user->load_object(array(array('id', '=', $user->id)));

		$is_pregnant = ($user->pregnancy_due_date >= date('Y-m-d'));
		$child_amount = count($user->children);

		$lowest_birthdate = '';
		$highest_birthdate = '';
		if ( ! empty($user->children))
		{
			$lowest_birthdate = min(array_column($user->children, 'birthdate'));
			$highest_birthdate = max(array_column($user->children, 'birthdate'));
		}

		return $this->_repository_follower->get_follow_suggestions(
			$user->id,
			$is_pregnant,
			$child_amount,
			$lowest_birthdate,
			$highest_birthdate,
			$limit
		);
	}
}