<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Featured_Section_Index {

	use View_Helper_Message, View_Helper_Select;

	private $_section;

	public function __construct($section, $messages)
	{
		$this->_section = $section;
		$this->messages = $messages;
	}

	public function section()
	{
		return $this->_section;
	}

	public function templates()
	{
		$templates = array(
			'twobig-twosmall' => 'Vier Blokken - 1. 450x288 | 2. 271x129 | 3. 271x129 | 4. 347x288',
			'twobig-threesmall' => 'Vijf Blokken - 1. 550x352 | 2. 550x352 | 3. 550x352 | 4. 550x352 | 5. 550x352',
		);

		return $this->select_list($templates, $this->_section->template);
	}
}