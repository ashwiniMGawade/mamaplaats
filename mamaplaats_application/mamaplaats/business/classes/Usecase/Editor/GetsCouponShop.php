<?php

class Usecase_Editor_GetsCouponShop {

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_shop;

	/**
	 * @var Repository_Coupon_Offer
	 */
	private $_repository_offer;

	public function __construct($repository_shop, $repository_offer)
	{
		$this->_repository_shop 	= $repository_shop;
		$this->_repository_offer 	= $repository_offer;
	}

	public function execute($shop_id)
	{
		if (empty($shop_id))
		{
			return array('shop' => new Entity_Coupon_Shop, 'offers' => array());
		}

		$shop = $this->_repository_shop->load_object(array(array('id', '=', $shop_id)));
		$offers = $this->_repository_offer->load_set(array(array('coupon_shop_id', '=', $shop->id)));

		return array('shop' => $shop, 'offers' => $offers);
	}
}