<?php

class Widget_MostViewedBlogs {

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	public function __construct($repository_blog)
	{
		$this->_repository_blog = $repository_blog;
	}

	public function load()
	{
		return $this->_repository_blog->load_set_advanced(array(
			array('blog.post_status', '=', 'publish'),
			array('blog.post_date', '>', date('Y-m-d 00:00:00', strtotime('-30 days'))),
		), 'blog.view_count', 'DESC', 3, 0);
	}
}