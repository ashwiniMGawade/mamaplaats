<?php

class Widget_Factory {

	public static function load(array $options)
	{
		return new Widget_Builder($options, new Widget_Factory, Kostache::factory());
	}

	public function ActiveAuthors()
	{
		return new Widget_ActiveAuthors(Factory_Repository::user());
	}

	public function LatestComments()
	{
		return new Widget_LatestComments(Factory_Repository::comment());
	}

	public function LatestWin()
	{
		return new Widget_LatestWin(Factory_Repository::win());
	}

	public function MostViewedBlogs()
	{
		return new Widget_MostViewedBlogs(Factory_Repository::blog());
	}

	public function PopularCouponCategories()
	{
		return new Widget_PopularCouponCategories(Factory_Repository::coupon_category());
	}

	public function PopularCouponOffers()
	{
		return new Widget_PopularCouponOffers(Factory_Repository::coupon_offer());
	}

	public function PopularCouponShops()
	{
		return new Widget_PopularCouponShops(Factory_Repository::coupon_shop());
	}

	public function RelatedCouponShops()
	{
		return new Widget_RelatedCouponShops(Factory_Repository::coupon_shop());
	}

	public function RelatedExpertAdvice()
	{
		return new Widget_RelatedExpertAdvice(Factory_Repository::advise(), Factory_Repository::category(), new Item_Nester);
	}
}