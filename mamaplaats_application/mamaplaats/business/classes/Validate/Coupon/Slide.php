<?php

class Validate_Coupon_Slide extends Validate_Template
{
	private $_rules = array(
		'title' => array(array('not_empty')),
		'image' => array(array('not_empty')),
		'url' 	=> array(array('not_empty'), array('url')),
		'order' => array(array('not_empty'), array('digit')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}