<?php

class Usecase_User_UpdatesBlog {
	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Repository_Category
	 */
	private $_repository_category;

	/**
	 * @var Validate_Blog
	 */
	private $_validate_blog;

	/**
	 * @var Activity_Logger
	 */
	private $_activity_logger;

	public function __construct($repository_blog, $repository_category, $validate_blog, $activity_logger)
	{
		$this->_repository_blog 	= $repository_blog;
		$this->_repository_category = $repository_category;
		$this->_validate_blog 		= $validate_blog;
		$this->_activity_logger 	= $activity_logger;
	}

	public function execute(Entity_User $user, $blog_id, array $fields)
	{
		$blog = $this->_repository_blog->load_object(array(array('id', '=', $blog_id)));
		$blog->title		= $fields['title'];
		$blog->excerpt		= $fields['excerpt'];
		$blog->content		= $fields['content'];
		$blog->modified		= date('Y-m-d H:i:s');
		$blog->modified_gmt	= gmdate('Y-m-d H:i:s');

		if ( ! empty($fields['thumbnail_id']))
		{
			$blog->thumbnail_id = $fields['thumbnail_id'];
		}

		$previous_status = $blog->status;
		if ( ! empty($fields['status']) AND in_array($fields['status'], array('draft', 'publish')))
		{
			$blog->status = $fields['status'];
		}

		if ($this->_validate_blog($blog) !== TRUE)
		{
			$blog->status = 'draft';
			$this->_update_blog($blog, $fields['category_id']);

			throw new Validate_Exception('Invalid blog posted', $this->_validate_blog->errors());
		}
		else
		{
			$this->_update_blog($blog, $fields['category_id']);
			$this->_log_activity($user, $blog, $previous_status);
		}

		return $blog;
	}

	private function _validate_blog(Entity_Blog $blog)
	{
		$this->_validate_blog->load($blog->as_array());
		$this->_validate_blog->default_rules();

		return $this->_validate_blog->check();
	}

	private function _update_blog($blog, $category_id)
	{
		$blog = $this->_repository_blog->update($blog);
		$this->_repository_category->create_item_link($category_id, $blog->id);

		return $blog;
	}

	private function _log_activity($user, $blog, $previous_status)
	{
		if ($previous_status == 'draft' AND $blog->status == 'publish')
		{
			$this->_activity_logger->log($user, 'user_published_blog', $blog);
		}
	}
}