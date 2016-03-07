<?php

class View_Coupon_Shop_Index {

	use View_Helper_ImagePath, View_Helper_Coupon;

	public $title;
	public $description;
	public $image;
	public $widgets;

	private $_coupon_shop;


	public function __construct($coupon_shop, $widgets)
	{
		$this->title = $coupon_shop->name.' Kortingscodes';
		$this->description = $coupon_shop->description;
		$this->image = $this->get_image('coupon/shop/'.$coupon_shop->id.'.jpg', 180);
		$this->widgets = $widgets;

		$this->_coupon_shop = $coupon_shop;
	}

	public function coupon_shop()
	{
		$open_url = '/korting/winkel/'.$this->_coupon_shop->slug;

		$coupon_shop = $this->_coupon_shop;
		$coupon_shop->image = $this->get_image('coupon/shop/'.$coupon_shop->id.'.jpg', 180);
		$coupon_shop->coupon_offers = $this->format_coupon_offers($coupon_shop->coupon_offers, $open_url);
		$coupon_shop->related_offers = $this->format_coupon_offers($coupon_shop->related_offers, $open_url);

		return $coupon_shop;
	}
}