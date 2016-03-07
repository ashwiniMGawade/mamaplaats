<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Setting_AdvertisementPopup_Update {

	use View_Helper_Message, View_Helper_ImagePath;

	private $_advertisement;

	public function __construct($advertisement, $messages)
	{
		$this->_advertisement = $advertisement;
		$this->messages = $messages;
	}

	public function advertisement()
	{
		$advertisement = $this->_advertisement;

		$advertisement->display_image = $this->get_advertisement_image($advertisement->image);

		$advertisement->is_on = ($advertisement->status == 'On');
		$advertisement->is_off = ($advertisement->status == 'Off');

		return $advertisement;
	}
}