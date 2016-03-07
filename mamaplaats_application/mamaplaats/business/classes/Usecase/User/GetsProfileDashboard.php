<?php

class Usecase_User_GetsProfileDashboard {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Repository_Activity
	 */
	private $_repository_activity;

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follower;

	public function __construct(
		$repository_user,
		$repository_blog,
		$repository_activity,
		$repository_follower
	)
	{
		$this->_repository_user 		= $repository_user;
		$this->_repository_blog			= $repository_blog;
		$this->_repository_activity		= $repository_activity;
		$this->_repository_follower		= $repository_follower;
	}

	public function execute(Entity_User $user, $limit = '')
	{
		$following = $this->_repository_follower->get_following_users($user->id);

		$blog_list = array();
		if( ! empty($following))
		{
			$blog_list	= $this->_repository_blog->load_set_advanced(
				array(
					array('blog.post_author', 'IN', $following)
				),
				'blog.post_date', 'DESC', 3, 0
			);
		}
		
		$timeline     = $this->_get_timeline($user->id, $limit);

		$top_blog_list	= $this->_repository_blog->load_set_advanced(
			array(
				array('blog.post_date', '>', date('Y-m-d 00:00:00', strtotime('-30 days'))),
			),
			'blog.view_count', 'DESC', 3, 0
		);

		$own_blog_list	= $this->_repository_blog->load_set_advanced(
			array(
				array('blog.post_author', '=', $user->id)
			),
			'blog.post_date', 'DESC', 3, 0
		);

		return array(
			'blog_list'		=> $blog_list,
			'timeline'      => $timeline,
			'top_blog_list' => $top_blog_list,
			'following'     => $following,
			'own_blog_list' => $own_blog_list,
		);
	}

	private function _get_timeline($user_id, $limit)
	{
		$activities = $this->_repository_activity->load_from_following($user_id, $limit);

		$timeline = array();

		foreach ($activities as $activity)
		{
			// load the main user 'Mamaplaats' as poster for activities with user_id NULL
			if ($activity->user_id == NULL)
			{
				$activity->user_id = 1;
			}

			$timeline[] = array (
				'user'	=> $this->_repository_user->load_object(array(array('id', '=', $activity->user_id))),
				'activity' => $activity
			);
		}

		return $timeline;
	}
}