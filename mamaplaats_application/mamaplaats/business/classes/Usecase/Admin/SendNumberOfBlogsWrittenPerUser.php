<?php

class Usecase_Admin_SendNumberOfBlogsWrittenPerUser {

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Newsletter_Subscribe
	 */
	private $_newsletter_subscribe;


	public function __construct($repository_blog, $repository_user, $newsletter_subscribe)
	{
		$this->_repository_blog = $repository_blog;
		$this->_repository_user = $repository_user;
		$this->_newsletter_subscribe = $newsletter_subscribe;
	}

	public function execute($time)
	{
		$blogs = $this->_get_blogs_written($time);

		$authors = $this->_get_authors_by_published_blogs($blogs);

		$authors_with_blog_count = $this->_get_number_of_blogs_per_author($authors);

		$this->_newsletter_subscribe->update_blog_count($authors_with_blog_count);
		
	}

	private function _get_blogs_written($time)
	{
		return $this->_repository_blog->load_set_advanced(
			array(
				array('blog.post_status', '=', 'publish'),
				array('blog.post_date', '>=', date( "Y-m-d H:i:s", strtotime($time)))
			),
			'blog.post_date', 'DESC'
		);
	}

	private function _get_authors_by_published_blogs($blogs)
	{
		$authors = array();

		foreach ($blogs as $user => $blog) {
   			$authors[$user] = $blog['user'];
   		}

   		return $authors;
	}

	private function _get_number_of_blogs_per_author($authors)
	{
		foreach ($authors as $key => $author) {
			$blogs = $this->_repository_blog->load_set_advanced(
				array(
					array('blog.post_author', '=', $author->id),
				),
				'blog.post_date', 'DESC'
			);

			$authors[$key]->blog_count = count($blogs);
		}

		return $authors;
	}
}