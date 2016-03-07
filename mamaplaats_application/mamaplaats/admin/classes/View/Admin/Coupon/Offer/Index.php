<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Offer_Index {

	use View_Helper_Select, View_Helper_Message;

	private $_offer;
	private $_shops;
	private $_categories;

	public function __construct($offer, $shops, $categories, $messages)
	{
		$this->_offer = $offer;
		$this->_shops = $shops;
		$this->_categories = $categories;
		$this->messages = $messages;
	}

	public function offer()
	{
		return $this->_offer;
	}

	public function categories()
	{
		$categories = array();
		foreach ($this->_categories as $category)
		{
			$categories[$category->id] = $category->name;
		}

		return $this->select_list($categories, $this->_offer->coupon_category_id);
	}

	public function shops()
	{
		$shops = array();
		foreach ($this->_shops as $shop)
		{
			$shops[$shop->id] = $shop->name;
		}

		return $this->select_list($shops, $this->_offer->coupon_shop_id);
	}

	public function types()
	{
		return $this->select_list(array('offer' => 'Aanbieding', 'free' => 'Gratis', 'coupon' => 'Kortingscode'), $this->_offer->type);
	}
}