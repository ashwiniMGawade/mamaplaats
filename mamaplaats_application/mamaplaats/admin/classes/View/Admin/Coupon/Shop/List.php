<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Shop_List {

	private $_shops;

	public function __construct(array $shops)
	{
		$this->_shops = $shops;
	}

	public function shops()
	{
		$shops = array();
		foreach ($this->_shops as $shop)
		{
			$shop->description = substr($shop->description, 0, 100).'...';
			$shop->is_popular = ($shop->is_popular) ? 'Ja' : 'Nee';
			$shops[] = $shop;
		}

		return $shops;
	}
}