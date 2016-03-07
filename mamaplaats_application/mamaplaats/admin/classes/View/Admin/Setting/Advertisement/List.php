<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Setting_Advertisement_List {

	private $_advertisements;

	private $_slugs;

	public function __construct($advertisements, $slugs)
	{
		$this->_advertisements = $advertisements;
		$this->_slugs = $slugs;
	}

	public function advertisements()
	{
		return $this->_advertisements;
	}

	public function add_advertisement()
	{
		if(count($this->_advertisements) < count($this->_slugs))
		{
			return true;
		}

		return false;
	}
}