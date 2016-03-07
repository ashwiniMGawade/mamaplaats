<?php

class Usecase_User_GetsAuthorInfo{

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Follower
	 */
	private $_repository_follower;

	public function __construct($repository_user, $repository_blog, $repository_review, $repository_follower)
	{
		$this->_repository_user = $repository_user;
		$this->_repository_blog	= $repository_blog;
		$this->_repository_review = $repository_review;
		$this->_repository_follower = $repository_follower;
	}

	public function execute(Entity_User $user, $author_slug)
	{
		$author = $this->_get_author($author_slug);
		$author->following = $this->_repository_follower->check_if_following($user->id, $author->id);

		return array(
			'author'		=> $author,
			'blog_list'		=> $this->_get_blog_list($author->id),
			'review_list'	=> $this->_get_review_list($author->id),
		);
	}

	protected function _get_author($author_slug)
	{
		return $author = $this->_repository_user->load_object(array(array('slug', '=', $author_slug)));
	}

	protected function _get_blog_list($author_id)
	{
		return 	$this->_repository_blog->load_latest_with_limit($author_id, 15, 0);
	}

	protected function _get_review_list($author_id)
	{
		return $this->_repository_review->load_set(array(array('user_id', '=', $author_id)));
	}
}