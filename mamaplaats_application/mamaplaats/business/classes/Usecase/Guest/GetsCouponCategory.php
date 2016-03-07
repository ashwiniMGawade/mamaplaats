<?php

class Usecase_Guest_GetsCouponCategory {

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


	public function execute($slug)
	{
		$category = $this->_repository_coupon_category->load_object(array(array('slug', '=', $slug)));
		if (empty($category))
		{
			throw new Exception('Unable to find coupon category with slug: '.$slug);
		}

		$category->coupon_offers = $this->_repository_coupon_offer->get_for_category($category->id);

		return $category;
	}
}