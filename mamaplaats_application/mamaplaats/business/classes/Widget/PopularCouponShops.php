<?php

class Widget_PopularCouponShops {

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_coupon_shop;

	public function __construct($repository_coupon_shop)
	{
		$this->_repository_coupon_shop = $repository_coupon_shop;
	}

	public function load()
	{
		return $this->_repository_coupon_shop->get_most_popular(10);
	}
}