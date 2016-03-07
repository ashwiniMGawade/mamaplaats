<?php

class Usecase_Guest_GetsFeaturedSection {

	/**
	 * @var Repository_Featured_Section
	 */
	private $_repository_featured_section;

	public function __construct($repository_featured_section)
	{
		$this->_repository_featured_section = $repository_featured_section;
	}

	public function execute($tag)
	{
		return $this->_repository_featured_section->load_object(array(array('tag', '=', $tag)));
	}
}