<?php

class View_Page_List {

	private $_page_list;
	private $_category_slug;

	public function __construct($page_list, $category_slug)
	{
		$this->_page_list = $page_list;
		$this->_category_slug = $category_slug;
	}

	public function page_list()
	{
		$page_list = array();
		foreach ($this->_page_list as $page)
		{
			$media = $page['media'];
			$media->url = $media->path;

			$page_list[] = array_merge(
				array('page' => $page['page']),
				array('user' => $page['user']),
				array('media' => $media)
			);
		}
		return $page_list;
	}

	public function category_slug()
	{
		return $this->_category_slug;
	}
}