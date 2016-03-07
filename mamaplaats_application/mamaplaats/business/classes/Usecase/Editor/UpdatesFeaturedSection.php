<?php

class Usecase_Editor_UpdatesFeaturedSection {

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

	public function execute($section_id, array $fields)
	{
		$section = $this->_repository_featured_section->load_object(array(array('id', '=', $section_id)));
		$section->set_fields($fields);

		$this->_validate_featured_section($section);

		return $this->_repository_featured_section->update($section);
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