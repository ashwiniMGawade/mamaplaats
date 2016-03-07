<?php

class View_Coupon_Home {

	use View_Helper_ImagePath;

	public $title = 'Coupons';
	public $description = 'Vind unieke kortingscodes en aanbiedingen voor mama en kind';
	public $image;
	public $widgets;

	private $_popular_categories;
	private $_coupon_slides;
	private $_coupon_partners;

	public function __construct($popular_categories, $coupon_slides, $coupon_partners, $widgets)
	{
		$this->_popular_categories 	= $this->_format_categories($popular_categories);
		$this->_coupon_slides 		= $coupon_slides;
		$this->_coupon_partners 	= $coupon_partners;
		$this->widgets = $widgets;
	}

	public function coupon_partners()
	{
		return $this->_coupon_partners;
	}

	public function coupon_slides()
	{
		$coupon_slides = array();
		foreach ($this->_coupon_slides as $i => $slide)
		{
			$slide->active = ($i === 0);
			$coupon_slides[] = $slide;
		}

		return $coupon_slides;
	}

	public function popular_categories()
	{
		return $this->_popular_categories;
	}

	private function _format_categories($categories)
	{
		foreach ($categories as $i => $category)
		{
			$category->active = ($i === 0);
			$category->image = $this->get_image('coupon/category/'.$category->id.'.jpg', 58, 58);
			$category->coupons = $this->_format_coupons($category->coupons);

			$categories[$i] = $category;
		}

		return $categories;
	}

	private function _format_coupons($coupons)
	{
		foreach ($coupons as $i => $coupon)
		{
			$coupon->image = $this->get_image('coupon/shop/'.$coupon->coupon_shop_id.'.jpg', 58, 58);
			$coupons[$i] = $coupon;
		}

		return $coupons;
	}
}