<?php

class Validate_Review extends Validate_Template
{
	private $_rules = array(
		'id' 						=> array(array('digit')),
		'title'						=> array(array('not_empty')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}