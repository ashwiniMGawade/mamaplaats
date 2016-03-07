<?php

class Usecase_Guest_GetsAdviseList {

	/**
	 * @var Repository_Advise
	 */
	private $_repository_advise;

	/**
	 * @var Repository_Category
	 */
	private $_repository_category;

	/**
	 * @var Item_Nester
	 */
	private $_item_nester;

	public function __construct($repository_advise, $repository_category, $item_nester)
	{
		$this->_repository_advise = $repository_advise;
		$this->_repository_category = $repository_category;
		$this->_item_nester = $item_nester;
	}

	public function execute($category_slug, $limit, $offset = 0)
	{
		// Don't load more than 200
		if ($limit > 200)
		{
			$limit = 200;
		}

		if (empty($category_slug))
		{
			return $this->_get_advises_from_all_categories( (int) $limit, (int) $offset);
		}

		return $this->_get_advises_by_category_slug($category_slug, (int) $limit, (int) $offset);
	}

	private function _get_advises_from_all_categories($limit, $offset)
	{
		return $this->_repository_advise->load_set_advanced(
			array(array('advise.post_status', '=', 'publish')),
			'advise.post_date', 'DESC',
			$limit, $offset
		);
	}

	private function _get_advises_by_category_slug($category_slug, $limit, $offset)
	{
		$parent	= $this->_repository_category->load_object(array(array('slug', '=', $category_slug)));
		if (empty($parent))
		{
			throw new Exception('Category does not Exist');
		}

		$categories = $this->_repository_category->load_set(array());
		$category_ids = $this->_item_nester->get_parent_with_children_ids($parent, $categories);

		return $this->_repository_advise->load_set_by_category_id($category_ids, $limit, $offset);
	}
}