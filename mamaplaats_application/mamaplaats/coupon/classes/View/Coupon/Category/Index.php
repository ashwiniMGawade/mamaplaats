<?php

class View_Coupon_Category_Index {

	use View_Helper_ImagePath, View_Helper_Coupon;

	public $title;
	public $description;
	public $image;
	public $widgets;

	private $_coupon_category;


	public function __construct($coupon_category, $widgets)
	{
		$this->title = $coupon_category->name.' Kortingscodes';
		$this->description = $coupon_category->description;
		$this->image = $this->get_image('coupon/category/'.$coupon_category->id.'.jpg', 180);
		$this->widgets = $widgets;

		$this->_coupon_category = $coupon_category;
	}

	public function coupon_category()
	{
		$open_url = '/korting/categorie/'.$this->_coupon_category->slug;

		$coupon_category = $this->_coupon_category;
		$coupon_category->image = $this->get_image('coupon/category/'.$coupon_category->id.'.jpg', 180);
		$coupon_category->coupon_offers = $this->format_coupon_offers($coupon_category->coupon_offers, $open_url);

		return $coupon_category;
	}
}