<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Shop_Index {

	use View_Helper_Select, View_Helper_ImagePath, View_Helper_Message;

	private $_shop;
	private $_offers;
	private $_categories;

	public function __construct($shop_data, $categories, $messages)
	{
		$shop = $shop_data['shop'];
		$shop->image = $this->get_image('coupon/shop/'.$shop->id.'.jpg', 180, 180);

		$this->_shop = $shop;
		$this->_offers = $shop_data['offers'];
		$this->_categories = $categories;
		$this->messages = $messages;
	}

	public function shop()
	{
		return $this->_shop;
	}

	public function popular()
	{
		return $this->select_list(array(0 => 'Nee', 1 => 'Ja'), $this->_shop->is_popular);
	}

	public function categories()
	{
		$categories = array();
		foreach ($this->_categories as $category)
		{
			$categories[$category->id] = $category->name;
		}

		return $this->select_list($categories, $this->_shop->coupon_category_id);
	}

	public function offers()
	{
		return $this->_offers;
	}
}