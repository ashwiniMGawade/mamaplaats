<?php

class Validate_Coupon_Offer extends Validate_Template
{
	private $_rules = array(
		'coupon_shop_id' 		=> array(array('not_empty'), array('digit')),
		'coupon_category_id' 	=> array(array('not_empty'), array('digit')),
		'title' 				=> array(array('not_empty')),
		'description' 			=> array(array('not_empty')),
		'start_date' 			=> array(array('not_empty'), array('date')),
		'end_date' 				=> array(array('not_empty'), array('date')),
		'type' 					=> array(array('not_empty')),
	);

	public function load(array $data, $validation = FALSE)
	{
		parent::load($data, $validation);

		// Only validate coupon code when it's an coupon
		if ( ! empty($data['type']) AND $data['type'] === 'coupon')
		{
			parent::rules(array('coupon_code' => array(array('not_empty'))));
		}
	}

	public function default_rules()
	{
		parent::rules($this->_rules);
	}
}