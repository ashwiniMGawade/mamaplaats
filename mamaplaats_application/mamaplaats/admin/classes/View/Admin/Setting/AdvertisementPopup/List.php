<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Setting_AdvertisementPopup_List {

	public function __construct($advertisements)
	{
		$this->_advertisements = $advertisements;
	}

	public function advertisements()
	{
		return $this->_advertisements;
	}
}