<?php

class Validate_Review_Product extends Validate_Template
{
	private $_rules = array(
		'id' 				=> array(array('digit')),
		'category_id'		=> array(array('not_empty'), array('digit')),
		'title' 			=> array(array('not_empty')),
		'slug' 				=> array(array('not_empty')),
		'description' 		=> array(array('not_empty')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}