<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Featured_Section_List {

	private $_sections;

	public function __construct($sections)
	{
		$this->_sections = $sections;
	}

	public function sections()
	{
		return $this->_sections;
	}
}