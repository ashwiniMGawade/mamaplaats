<?php

class Usecase_Editor_GetsFeaturedSectionList {

	/**
	 * @var Repository_Featured_Section
	 */
	private $_repository_featured_section;

	public function __construct($repository_featured_section)
	{
		$this->_repository_featured_section = $repository_featured_section;
	}

	public function execute()
	{
		return $this->_repository_featured_section->load_set(array());
	}
}