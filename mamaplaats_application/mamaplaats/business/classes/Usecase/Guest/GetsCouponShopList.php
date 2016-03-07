<?php

class Usecase_Guest_GetsCouponShopList {

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_coupon_shop;

	public function __construct($repository_coupon_shop)
	{
		$this->_repository_coupon_shop 	= $repository_coupon_shop;
	}


	public function execute()
	{
		return $this->_repository_coupon_shop->load_set(array());
	}
}