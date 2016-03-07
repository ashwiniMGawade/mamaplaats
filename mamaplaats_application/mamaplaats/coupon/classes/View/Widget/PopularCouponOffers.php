<?php

class View_Widget_PopularCouponOffers {

	use View_Helper_ImagePath;

	private $_popular_coupon_offers;

	public function __construct($popular_coupon_offers)
	{
		$this->_popular_coupon_offers = $popular_coupon_offers;
	}

	public function popular_coupon_offers()
	{
		$popular_coupon_offers = array();
		foreach ($this->_popular_coupon_offers as $coupon_offer)
		{
			$coupon_offer->image = $this->get_image('coupon/shop/'.$coupon_offer->coupon_shop_id.'.jpg', 58, 58);
			$popular_coupon_offers[] = $coupon_offer;
		}

		return $popular_coupon_offers;
	}
}