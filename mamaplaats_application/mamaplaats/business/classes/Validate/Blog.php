<?php

class Validate_Blog extends Validate_Template
{
	private $_rules = array(
		'thumbnail_id'	=> array(array('not_empty')),
		'author_id'		=> array(array('not_empty'), array('digit')),
		'title' 		=> array(array('not_empty'), array('min_length', array(':value', 20)), array('max_length', array(':value', 55))),
		'excerpt' 		=> array(array('not_empty'), array('min_length', array(':value', 70)), array('max_length', array(':value', 140))),
		'content' 		=> array(array('not_empty'), array('min_length', array(':value', 200))),
		'status' 		=> array(array('not_empty')),
		'created' 		=> array(array('not_empty'), array('date')),
		'created_gmt' 	=> array(array('not_empty'), array('date')),
		'modified' 		=> array(array('not_empty'), array('date')),
		'modified_gmt' 	=> array(array('not_empty'), array('date')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}