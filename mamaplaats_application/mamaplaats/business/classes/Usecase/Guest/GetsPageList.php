<?php

class Usecase_Guest_GetsPageList {

	/**
	 * @var Repository_Page
	 */
	private $_repository_page;

	/**
	 * @var Repository_Category
	 */
	private $_repository_category;

	/**
	 * @var Item_Nester
	 */
	private $_item_nester;

	public function __construct($repository_page, $repository_category, $item_nester)
	{
		$this->_repository_page = $repository_page;
		$this->_repository_category = $repository_category;
		$this->_item_nester = $item_nester;
	}

	public function execute($category_slug, $page)
	{
		return $this->_get_page_list($category_slug, $page);
	}

	private function _get_page_list($category_slug, $page)
	{
		$limit = 15;
		$offset = ($limit * $page) - $limit;

		$categories = $this->_repository_category->load_set(array());
		$parent		= $this->_repository_category->load_object(array(array('slug', '=', $category_slug)));

		if (empty($parent))
		{
			throw new Exception('Category does not Exist');
		}

		$category_ids = $this->_item_nester->get_parent_with_children_ids($parent, $categories);

		return $this->_repository_page->load_set_by_category_id($category_ids, $limit, $offset);
	}

}