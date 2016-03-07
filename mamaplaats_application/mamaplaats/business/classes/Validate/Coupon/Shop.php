<?php

class Validate_Coupon_Shop extends Validate_Template
{
	private $_rules = array(
		'coupon_category_id' 	=> array(array('not_empty'), array('digit')),
		'slug' 					=> array(array('not_empty')),
		'name' 					=> array(array('not_empty')),
		'title' 				=> array(array('not_empty')),
		'description' 			=> array(array('not_empty')),
		'about' 				=> array(array('not_empty')),
		'url' 					=> array(array('not_empty'), array('url')),
		'is_popular' 			=> array(array('digit')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}