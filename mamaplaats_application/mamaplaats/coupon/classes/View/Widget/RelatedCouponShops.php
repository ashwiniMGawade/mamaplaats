<?php

class View_Widget_RelatedCouponShops {

	use View_Helper_ImagePath;

	private $_related_coupon_shops;

	public function __construct($related_coupon_shops)
	{
		$this->_related_coupon_shops = $related_coupon_shops;
	}

	public function related_coupon_shops()
	{
		$related_coupon_shops = array();
		foreach ($this->_related_coupon_shops as $coupon_shop)
		{
			$coupon_shop->image = $this->get_image('coupon/shop/'.$coupon_shop->id.'.jpg', 58, 58);
			$related_coupon_shops[] = $coupon_shop;
		}

		return $related_coupon_shops;
	}
}