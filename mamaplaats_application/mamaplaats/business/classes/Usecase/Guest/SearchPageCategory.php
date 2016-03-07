<?php

class Usecase_Guest_SearchPageCategory {

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

	public function execute($query, $limit)
	{
		$categories = $this->_repository_category->load_set(array());
		$parent		= $this->_repository_category->load_object(array(array('slug', '=', $query['category'])));

		if (empty($parent))
		{
			throw new Exception('Category does not Exist');
		}

		$category_ids = $this->_item_nester->get_parent_with_children_ids($parent, $categories);

		return $this->_repository_page->search_category($category_ids, $query['term'], $limit, 0);
	}
}