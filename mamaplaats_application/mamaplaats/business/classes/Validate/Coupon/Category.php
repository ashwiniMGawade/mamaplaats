<?php

class Validate_Coupon_Category extends Validate_Template
{
	private $_rules = array(
		'slug' 			=> array(array('not_empty')),
		'name' 			=> array(array('not_empty')),
		'description' 	=> array(array('not_empty')),
		'is_popular' 	=> array(array('digit')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}