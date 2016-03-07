<?php

class Validate_User_Child extends Validate_Template
{
	private $_rules = array(
		'id' 		=> array(array('digit')),
		'first_name' => array(array('not_empty')),
		'birthdate' => array(array('not_empty'), array('date')),
		'gender' 	=> array(array('not_empty'), array('digit')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}