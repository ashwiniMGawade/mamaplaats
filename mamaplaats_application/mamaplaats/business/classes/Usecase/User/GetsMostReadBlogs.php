<?php

class Usecase_User_GetsMostReadBlogs {

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	public function __construct($repository_blog)
	{
		$this->_repository_blog = $repository_blog;
	}

	public function execute($filters, $limit, $offset = 0)
	{
		// Don't load more than 200
		if ($limit > 200)
		{
			$limit = 200;
		}

		return $this->_repository_blog->load_set_advanced(
			$filters,
			'blog.view_count', 'DESC', $limit, $offset
		);
	}
}