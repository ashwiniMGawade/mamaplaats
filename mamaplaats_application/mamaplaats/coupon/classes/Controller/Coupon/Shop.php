<?php

class Controller_Coupon_Shop extends Controller_Base {

	public function action_list()
	{
		$coupon_shops = Factory_Guest::gets_coupon_shop_list()->execute();
		$popular_shops = Factory_Repository::coupon_shop()->load_set(array(array('is_popular', '=', 1)));

		$widgets = Widget_Factory::load(array(
			'PopularCouponOffers' => NULL,
		));

		$this->view = new View_Coupon_Shop_List($coupon_shops, $popular_shops, $this->request->query('character'), $widgets->render());
	}

	public function action_index()
	{
		try
		{
			$coupon_shop = Factory_Guest::gets_coupon_shop()->execute($this->request->param('slug'));
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'RelatedCouponShops' => array($coupon_shop->coupon_category_id),
			'PopularCouponShops' => NULL,
			'PopularCouponOffers' => NULL,
			'PopularCouponCategories' => NULL,
		));

		$this->view = new View_Coupon_Shop_Index($coupon_shop, $widgets->render());
	}
}