<?php

class Widget_RelatedExpertAdvice {

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

	public function load($category_id)
	{
		if (is_array($category_id))
		{
			if ( ! empty($category_id))
			{
				$category_id = array_shift($category_id);
			}
			else
			{
				$category_id = '';
			}
		}

		return $this->_load_related_by_category($category_id);
	}

	private function _load_related_by_category($category_id)
	{
		$parent = new Entity_Category(array('id' => 0));
		if ( ! empty($category_id) AND ! is_numeric($category_id))
		{
			$parent	= $this->_repository_category->load_object(array(array('slug', '=', $category_id)));
		}
		elseif ( ! empty($category_id) AND is_numeric($category_id))
		{
			$parent = new Entity_Category(array('id' => $category_id));
		}

		$categories = $this->_repository_category->load_set(array());
		$category_ids = $this->_item_nester->get_parent_with_children_ids($parent, $categories);

		return $this->_repository_advise->load_set_by_category_id($category_ids, 3, 0);
	}
}