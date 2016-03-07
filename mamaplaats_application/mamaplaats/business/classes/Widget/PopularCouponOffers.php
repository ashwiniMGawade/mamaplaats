<?php

class Widget_PopularCouponOffers {

	/**
	 * @var Repository_Coupon_Offer
	 */
	private $_repository_coupon_offer;

	public function __construct($repository_coupon_offer)
	{
		$this->_repository_coupon_offer = $repository_coupon_offer;
	}

	public function load()
	{
		return $this->_repository_coupon_offer->get_most_popular(10);
	}
}