<?php

class Validate_Media extends Validate_Template
{
	private $_rules = array(
		'id' 		=> array(array('digit')),
		'user_id'	=> array(array('not_empty'), array('digit')),
		'title' 	=> array(array('not_empty')),
		'path' 		=> array(array('not_empty')),
		'type' 		=> array(array('not_empty')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}