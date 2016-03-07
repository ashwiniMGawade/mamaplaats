<?php

class View_Page_Index {

	use View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

	private $_page;
	private $_user;

	public function __construct($page, $user)
	{
		$this->title = $page['page']->get_meta_title();
		$this->description = $page['page']->get_meta_description();

		// Create the thumbnail URL
		if ( ! empty($page['image']))
		{
			$page['page']->thumbnail = $this->get_image_legacy($page['image']->path, 750, 'n', FALSE);
			$this->image = URL::site($page['page']->thumbnail, TRUE);
		}

		$this->comment_item_id = $page['page']->id;
		$this->comment_author_id = $page['page']->author_id;

		$this->_page = $page;
		$this->_user = $user;
	}

	public function author()
	{
		return $this->_page['author'];
	}

	public function page()
	{
		$page = $this->_page['page'];
		$page->created_formatted = strftime('%A %e %B %Y', strtotime($page->created));

		return $page;
	}

}