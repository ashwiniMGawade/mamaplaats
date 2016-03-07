<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Setting_Advertisement_Index {

	use View_Helper_Select, View_Helper_Message;

	private $_advertisement;

	private $_slugs;

	public function __construct($advertisement, $slugs, $messages)
	{
		$this->_advertisement = $advertisement;
		$this->_slugs = $slugs;
		$this->messages = $messages;
	}

	public function advertisement()
	{
		$advertisement = $this->_advertisement;

		$advertisement->is_on = ($advertisement->status == 'On');
		$advertisement->is_off = ($advertisement->status == 'Off');

		return $advertisement;
	}

	public function slugs()
	{
		$list_slugs = $this->_slugs;

		return $this->select_list($list_slugs, $this->_advertisement->slug);
	}
}