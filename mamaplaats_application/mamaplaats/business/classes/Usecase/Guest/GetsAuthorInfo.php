<?php

class Usecase_Guest_GetsAuthorInfo {

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

	public function __construct($repository_user, $repository_blog, $repository_review)
	{
		$this->_repository_user = $repository_user;
		$this->_repository_blog	= $repository_blog;
		$this->_repository_review = $repository_review;
	}

	public function execute($author_slug, $limit, $offset = 0)
	{
		$author = $this->_get_author($author_slug);
		return array(
			'author'	=> $author,
			'blog_list'	=> $this->_get_blog_list($author->id, (int) $limit, (int) $offset),
		);
	}

	protected function _get_author($author_slug)
	{
		return $this->_repository_user->load_user_info($author_slug);
	}

	protected function _get_blog_list($author_id, $limit, $offset)
	{
		return $this->_repository_blog->load_set_advanced(
			array(
				array('blog.post_author', '=', $author_id),
				array('blog.post_status', '=', 'publish')
			),
			'blog.ID', 'DESC',
			$limit, $offset
		);
	}
}