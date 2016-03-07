<?php

class Validate_Setting_Advertisement extends Validate_Template
{
	private $_rules = array(
		'slug' => array(array('not_empty')),
		'name' => array(array('not_empty')),
		'description' => array(array('not_empty')),
		'status' => array(array('not_empty')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}

}