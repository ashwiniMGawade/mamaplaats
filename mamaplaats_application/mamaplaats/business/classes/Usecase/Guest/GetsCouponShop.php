<?php

class Usecase_Guest_GetsCouponShop {

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_coupon_shop;

	/**
	 * @var Repository_Coupon_Offer
	 */
	private $_repository_coupon_offer;

	public function __construct($repository_coupon_shop, $repository_coupon_offer)
	{
		$this->_repository_coupon_shop 	= $repository_coupon_shop;
		$this->_repository_coupon_offer = $repository_coupon_offer;
	}


	public function execute($slug)
	{
		$coupon_shop = $this->_repository_coupon_shop->load_object(array(array('slug', '=', $slug)));
		if (empty($coupon_shop))
		{
			throw new Exception('Unable to find coupon shop with slug: '.$slug);
		}

		// Add impression to coupon shop
		$coupon_shop->view_count = $coupon_shop->view_count + 1;
		$this->_repository_coupon_shop->update($coupon_shop);

		$coupon_shop->coupon_offers = $this->_repository_coupon_offer->get_for_shop($coupon_shop->id);
		$coupon_shop->related_offers = $this->_repository_coupon_offer->get_most_popular_for_category($coupon_shop->coupon_category_id, 20);

		return $coupon_shop;
	}
}