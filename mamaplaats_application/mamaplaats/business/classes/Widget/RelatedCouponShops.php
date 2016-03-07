<?php

class Widget_RelatedCouponShops {

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_coupon_shop;

	public function __construct($repository_coupon_shop)
	{
		$this->_repository_coupon_shop = $repository_coupon_shop;
	}

	public function load($category_id)
	{
		return $this->_repository_coupon_shop->get_by_category_id($category_id, 10);
	}
}