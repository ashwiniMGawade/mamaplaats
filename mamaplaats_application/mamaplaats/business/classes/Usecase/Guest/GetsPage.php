<?php

class Usecase_Guest_GetsPage {

	/**
	 * @var Repository_Page
	 */
	private $_repository_page;

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Legacy_Media
	 */
	private $_repository_media;

	/**
	 * @var Repository_Comment
	 */
	private $_repository_comment;

	/**
	 * @var Item_Nester
	 */
	private $_item_nester;

	public function __construct($repository_page, $repository_user, $repository_media, $repository_comment, $item_nester)
	{
		$this->_repository_page 	= $repository_page;
		$this->_repository_user 	= $repository_user;
		$this->_repository_media 	= $repository_media;
		$this->_repository_comment	= $repository_comment;
		$this->_item_nester		= $item_nester;
	}

	public function execute($page_slug)
	{
		return $this->_get_page($page_slug);
	}

	private function _get_page($page_slug)
	{
		$page = $this->_load_page_with_parents($page_slug);
		if (empty($page) OR $page->status != 'publish')
		{
			throw new Exception('Unable to find page with slug: '.$page_slug);
		}

		$image = array();
		if ( ! empty($page->thumbnail_id))
		{
			$image = $this->_repository_media->load_object(array(array('id', '=', $page->thumbnail_id)));
		}

		$author = $this->_repository_user->load_object(array(array('id', '=', $page->author_id)));
		$comments = $this->_repository_comment->load_set_advanced(array(array('post_id', '=', $page->id)));
		$nested_comments = $this->_item_nester->nest($comments);

		return array(
			'author' 	=> $author,
			'image' 	=> $image,
			'page' 		=> $page,
			'comments' 	=> $nested_comments,
		);
	}

	private function _load_page_with_parents($slug)
	{
		$slugs = explode('/', $slug);

		$parent_id = 0;
		$page = array();
		foreach ($slugs as $slug)
		{
			$page = $this->_repository_page->load_object(array(array('slug', '=', $slug)));
			if (empty($page) OR $page->parent_id != $parent_id)
			{
				return FALSE;
			}

			$parent_id = $page->id;
		}

		return $page;
	}
}