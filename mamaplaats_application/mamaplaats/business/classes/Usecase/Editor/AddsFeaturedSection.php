<?php

class Usecase_Editor_AddsFeaturedSection {

	/**
	 * @var Repository_Featured_Section
	 */
	private $_repository_featured_section;

	/**
	 * @var Validate_Featured_Section
	 */
	private $_validate_featured_section;

	public function __construct($repository_featured_section, $validate_featured_section)
	{
		$this->_repository_featured_section = $repository_featured_section;
		$this->_validate_featured_section = $validate_featured_section;
	}

	public function execute(array $fields)
	{
		$section = new Entity_Featured_Section($fields);
		$this->_validate_featured_section($section);

		return $this->_repository_featured_section->create($section);
	}

	public function _validate_featured_section(Entity_Featured_Section $section)
	{
		$this->_validate_featured_section->load($section->as_array());
		$this->_validate_featured_section->default_rules();

		if ($this->_validate_featured_section->check() !== TRUE)
		{
			throw new Validate_Exception('This featured section is invalid !', $this->_validate_featured_section->errors(), $section);
		}
	}
}