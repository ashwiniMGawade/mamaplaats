<?php

class View_Blog_List extends View_Blog_Items {

	use View_Helper_Advertisements, View_Helper_Device;

	public $title = 'Blogs';
	public $description = 'Onze moeder blogs op mamaplaats';
	public $category_slug = '';

	public $widgets;

	public function __construct($blog_list, $category, $widgets)
	{
		if ( ! empty($category->title))
		{
			$this->title = 'Blogs '.$category->title;
			$this->category_slug = $category->slug;
		}

		$this->widgets = $widgets;
		parent::__construct($blog_list);
	}
}