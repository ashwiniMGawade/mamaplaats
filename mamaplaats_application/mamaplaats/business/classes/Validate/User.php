<?php

class Validate_User extends Validate_Template
{
	private $_rules = array(
		'id' 		=> array(array('digit')),
		'slug' 		=> array(array('not_empty')),
		'first_name'=> array(array('not_empty')),
		'birthdate' => array(array('not_empty'), array('date')),
		'pregnancy_due_date' => array(array('date')),
		'gender' 	=> array(array('not_empty'), array('digit')),
		'email' 	=> array(array('not_empty'), array('email')),
		'password' 	=> array(array('not_empty')),
		'tos' 		=> array(array('agree')),
		'newsletter_group' => array(array('agree')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}