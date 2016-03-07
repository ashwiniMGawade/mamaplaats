<?php

class Controller_Coupon_Category extends Controller_Base {

	public function action_list()
	{
		$categories = Factory_Repository::coupon_category()->get_all();
		$widgets = Widget_Factory::load(array(
			'PopularCouponCategories' => NULL,
		));

		$this->view = new View_Coupon_Category_List($categories, $widgets->render());
	}

	public function action_index()
	{
		try
		{
			$coupon_category = Factory_Guest::gets_coupon_category()->execute($this->request->param('slug'));
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'RelatedCouponShops' => array($coupon_category->id),
			'PopularCouponShops' => NULL,
			'PopularCouponOffers' => NULL,
			'PopularCouponCategories' => NULL,
		));

		$this->view = new View_Coupon_Category_Index($coupon_category, $widgets->render());
	}
}