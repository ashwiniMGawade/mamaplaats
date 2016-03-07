<?php

class View_Widget_PopularCouponShops {

	private $_popular_coupon_shops;

	public function __construct($popular_coupon_shops)
	{
		$this->_popular_coupon_shops = $popular_coupon_shops;
	}

	public function popular_coupon_shops()
	{
		return $this->_popular_coupon_shops;
	}
}