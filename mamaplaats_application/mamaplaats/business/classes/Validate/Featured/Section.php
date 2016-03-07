<?php

class Validate_Featured_Section extends Validate_Template
{
	private $_rules = array(
		'title' 				=> array(array('not_empty')),
		'description' 			=> array(array('not_empty')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}