<?php

trait View_Helper_Coupon {

	protected function format_coupon_offers($coupon_offers, $open_url)
	{
		$formatted_offers = array();
		foreach ($coupon_offers as $coupon_offer)
		{
			$coupon_offer->image = $this->get_image('coupon/shop/'.$coupon_offer->coupon_shop_id.'.jpg', 98, 90);
			$coupon_offer->start_date = strftime('%e %B', strtotime($coupon_offer->start_date));
			$coupon_offer->end_date = strftime('%e %B', strtotime($coupon_offer->end_date));
			$coupon_offer->url = '/korting/aanbieding/'.$coupon_offer->id;

			// Set the url to itself when opening the coupon
			if ($coupon_offer->type == 'coupon')
			{
				$coupon_offer->open_url = $open_url.'#open_offer_'.$coupon_offer->id;
			}

			// Set fields by coupon offer
			$coupon_offer->is_coupon =  ($coupon_offer->type == 'coupon');
			$coupon_offer->is_offer =  ($coupon_offer->type == 'offer');
			$coupon_offer->is_free =  ($coupon_offer->type == 'free');

			$formatted_offers[] = $coupon_offer;
		}

		return $formatted_offers;
	}
}