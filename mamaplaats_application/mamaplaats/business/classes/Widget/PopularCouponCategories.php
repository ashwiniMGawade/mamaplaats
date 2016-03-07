<?php

class Widget_PopularCouponCategories {

	/**
	 * @var Repository_Coupon_Category
	 */
	private $_repository_coupon_category;

	public function __construct($repository_coupon_category)
	{
		$this->_repository_coupon_category = $repository_coupon_category;
	}

	public function load()
	{
		return $this->_repository_coupon_category->get_most_popular(10);
	}
}