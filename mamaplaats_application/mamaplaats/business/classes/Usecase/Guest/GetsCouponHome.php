<?php

class Usecase_Guest_GetsCouponHome {

	/**
	 * @var Repository_Coupon_Category
	 */
	private $_repository_coupon_category;

	/**
	 * @var Repository_Coupon_Offer
	 */
	private $_repository_coupon_offer;

	public function __construct($repository_coupon_category, $repository_coupon_offer)
	{
		$this->_repository_coupon_category 	= $repository_coupon_category;
		$this->_repository_coupon_offer 	= $repository_coupon_offer;
	}


	public function execute()
	{
		// Load the popular categories
		$popular_categories = $this->_repository_coupon_category->get_most_popular(10);

		// For Each Category Load 10 popular Coupons
		foreach ($popular_categories as $i => $category)
		{
			$popular_categories[$i]->coupons = $this->_repository_coupon_offer->get_most_popular_for_category($category->id, 10);
		}

		return $popular_categories;
	}
}