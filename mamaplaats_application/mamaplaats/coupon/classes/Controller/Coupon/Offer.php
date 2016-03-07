<?php

class Controller_Coupon_Offer extends Controller_Base {

	public function action_open()
	{
		$this->auto_render = FALSE;

		$repo_offer = Factory_Repository::coupon_offer();
		$offer_id 	= $this->request->param('offer_id');
		$offer 		= $repo_offer->load_object(array(array('id', '=', $offer_id)));

		if (empty($offer->url))
		{
			throw new HTTP_Exception_404('Deze Coupon Aanbieding Bestaat niet.');
		}

		// Add one clickout to offer
		$offer->click_outs = $offer->click_outs + 1;
		$repo_offer->update($offer);

		$this->redirect($offer->url);
	}

	public function action_most_popular()
	{
		$popular_offers = Factory_Repository::coupon_offer()->get_most_popular(20);
		$widgets = Widget_Factory::load(array(
			'PopularCouponShops' => NULL,
			'PopularCouponOffers' => NULL,
			'PopularCouponCategories' => NULL,
		));

		$this->view = new View_Coupon_Offer_MostPopular($popular_offers, $widgets->render());
	}

	public function action_newest()
	{
		$newest_offers = Factory_Repository::coupon_offer()->get_newest(20);
		$widgets = Widget_Factory::load(array(
			'PopularCouponShops' => NULL,
			'PopularCouponOffers' => NULL,
			'PopularCouponCategories' => NULL,
		));

		$this->view = new View_Coupon_Offer_Newest($newest_offers, $widgets->render());
	}

	public function action_free()
	{
		$free_offers = Factory_Repository::coupon_offer()->get_by_type('free');
		$widgets = Widget_Factory::load(array(
			'PopularCouponShops' => NULL,
			'PopularCouponOffers' => NULL,
			'PopularCouponCategories' => NULL,
		));

		$this->view = new View_Coupon_Offer_Free($free_offers, $widgets->render());
	}
}