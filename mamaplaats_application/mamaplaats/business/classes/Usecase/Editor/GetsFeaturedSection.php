<?php

class Usecase_Editor_GetsFeaturedSection {

	/**
	 * @var Repository_Featured_Section
	 */
	private $_repository_featured_section;

	public function __construct($repository_featured_section)
	{
		$this->_repository_featured_section = $repository_featured_section;
	}

	public function execute($section_id)
	{
		if (empty($section_id))
		{
			return new Entity_Featured_Section;
		}

		return  $this->_repository_featured_section->load_object(array(array('id', '=', $section_id)));
	}
}