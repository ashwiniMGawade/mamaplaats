<?php

class Validate_Browser extends Validate_Template
{
	private $_rules = array(
		'id' 		=> array(array('digit')),
		'user_id' 	=> array(array('digit')),
		'ip_address' => array(array('not_empty')),
		'browser' => array(array('not_empty')),
		'uri' => array(array('not_empty')),
		'status' 	=> array(array('digit')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}