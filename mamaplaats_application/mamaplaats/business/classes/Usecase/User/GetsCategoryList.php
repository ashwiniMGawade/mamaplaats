<?php

class Usecase_User_GetsCategoryList {

	/**
	 * @var Repository_Category
	 */
	private $_repository_category;

	public function __construct($repository_category)
	{
		$this->_repository_category = $repository_category;
	}

	public function execute($parent_id)
	{
        if( ! isset($parent_id)) {
            return false;
        }
		return   $this->_repository_category->load_set(array(
           array('parent_id', '=', $parent_id)
        ));
	}
}