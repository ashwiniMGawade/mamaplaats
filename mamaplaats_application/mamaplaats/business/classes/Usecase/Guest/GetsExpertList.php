<?php

class Usecase_Guest_GetsExpertList {

	/**
	 * @var Repository_Expert
	 */
	private $_repository_expert;

	/**
	 * @var Repository_Category
	 */
	private $_repository_category;

	/**
	 * @var Item_Nester
	 */
	private $_item_nester;

	public function __construct($repository_expert, $repository_category, $item_nester)
	{
		$this->_repository_expert = $repository_expert;
		$this->_repository_category = $repository_category;
		$this->_item_nester = $item_nester;
	}

	public function execute($category_slug, $limit, $offset)
	{
		return array (
			'expert_list' => $this->_get_expert_list($category_slug, $limit, $offset),
		);
	}

	private function _get_expert_list($category_slug, $limit, $offset)
	{
		if (empty($category_slug))
		{
			return $this->_repository_expert->load_set_advanced(
				array(array('expert.post_status', '=', 'publish')),
				'expert.post_date', 'DESC',
				$limit, $offset
			);
		}

		return $this->_get_experts_by_category_slug($category_slug, $limit, $offset);
	}

	private function _get_experts_by_category_slug($category_slug, $limit, $offset)
	{
		$parent	= $this->_repository_category->load_object(array(array('slug', '=', $category_slug)));
		if (empty($parent))
		{
			throw new Exception('Category does not Exist');
		}

		$categories = $this->_repository_category->load_set(array());
		$category_ids = $this->_item_nester->get_parent_with_children_ids($parent, $categories);

		return $this->_repository_expert->load_set_by_category_id($category_ids, $limit, $offset);
	}
}