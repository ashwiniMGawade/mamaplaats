<?php

class View_Widget_PopularCouponCategories {

	use View_Helper_ImagePath;

	private $_popular_coupon_categories;

	public function __construct($popular_coupon_categories)
	{
		$this->_popular_coupon_categories = $popular_coupon_categories;
	}

	public function popular_coupon_categories()
	{
		$popular_coupon_categories = array();
		foreach ($this->_popular_coupon_categories as $coupon_category)
		{
			$coupon_category->image = $this->get_image('coupon/category/'.$coupon_category->id.'.jpg', 58, 58);
			$popular_coupon_categories[] = $coupon_category;
		}

		return $popular_coupon_categories;
	}
}