<?php

class Validate_Setting_AdvertisementPopup extends Validate_Template
{
	private $_rules = array(
		'image' => array(array('not_empty')),
		'url' => array(array('not_empty'), array('url')),
		'start_date' => array(array('not_empty'), array('date')),
		'end_date' => array(array('not_empty'), array('date')),
		'status' => array(array('not_empty')),
	);

	public function default_rules()
	{
		parent::rules($this->_rules);
	}

	public function compare_date_range($start_date, $end_date)
	{
		if((strtotime($end_date)) < (strtotime($start_date)))
		{
			return false;
		}

		return true;
	}
}