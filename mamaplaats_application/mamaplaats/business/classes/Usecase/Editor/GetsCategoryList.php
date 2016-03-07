<?php

class Usecase_Editor_GetsCategoryList {

	/**
	 * @var Repository_Category
	 */
	private $_repository_category;

	public function __construct($repository_category)
	{
		$this->_repository_category = $repository_category;
	}

	public function execute()
	{
		return $this->_repository_category->load_set(array());
	}
}