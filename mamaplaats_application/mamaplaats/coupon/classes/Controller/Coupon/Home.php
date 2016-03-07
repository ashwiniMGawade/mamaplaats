<?php

class Controller_Coupon_Home extends Controller_Base {

	public function action_index()
	{
		$popular_categories = Factory_Guest::gets_coupon_home()->execute();
		$coupon_slides 		= Factory_Repository::coupon_slide()->load_set_ordered(array());
		$coupon_partners	= Kohana::$config->load('coupon_config')->get('partners');

		$widgets = Widget_Factory::load(array(
			'PopularCouponOffers' => NULL,
		));

		$this->view = new View_Coupon_Home($popular_categories, $coupon_slides, $coupon_partners, $widgets->render());
	}
}