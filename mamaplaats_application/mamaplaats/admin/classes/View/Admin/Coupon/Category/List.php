<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Category_List {

	private $_categories;

	public function __construct(array $categories)
	{
		$this->_categories = $categories;
	}

	public function categories()
	{
		$categories = array();
		foreach ($this->_categories as $category)
		{
			$category->description = substr($category->description, 0, 100).'...';
			$category->is_popular = ($category->is_popular) ? 'Ja' : 'Nee';
			$categories[] = $category;
		}

		return $categories;
	}
}