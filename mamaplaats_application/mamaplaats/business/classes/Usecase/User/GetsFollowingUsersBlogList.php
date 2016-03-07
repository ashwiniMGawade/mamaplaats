<?php

class Usecase_User_GetsFollowingUsersBlogList {

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follower;

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	public function __construct($repository_follower, $repository_blog)
	{
		$this->_repository_follower	= $repository_follower;
		$this->_repository_blog = $repository_blog;
	}

	public function execute(Entity_User $user, $limit, $offset = 0)
	{
		$following = $this->_repository_follower->get_following_users($user->id);

		// Don't load more than 200
		if ($limit > 200)
		{
			$limit = 200;
		}

		return $this->_repository_blog->load_set_advanced(
			array(
				array('blog.post_author', 'IN', $following)
			),
			'blog.post_date', 'DESC', $limit, $offset
		);
	}
}