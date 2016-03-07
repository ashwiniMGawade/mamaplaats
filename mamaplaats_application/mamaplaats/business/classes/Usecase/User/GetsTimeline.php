<?php

class Usecase_User_GetsTimeline {

	/**
	 * @var Repository_Activity
	 */
	private $_repository_activity;

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_activity, $repository_user)
	{
		$this->_repository_activity = $repository_activity;
		$this->_repository_user		= $repository_user;
	}

	public function execute($user_id, $limit = '')
	{
		return $this->_get_timeline($user_id, $limit);
	}

	private function _get_timeline($user_id, $limit)
	{
		$activities = $this->_repository_activity->load_from_following($user_id, $limit);

		$timeline = array();
		foreach ($activities as $activity)
		{
			$timeline[] = array (
				'user'	=> $this->_repository_user->load_object(array(array('id', '=', $activity->user_id))),
				'activity' => $activity
			);
		}

		return $timeline;
	}
}