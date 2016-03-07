<?php

class Usecase_Editor_UpdatesCouponOffer {

	/**
	 * @var Repository_Coupon_Offer
	 */
	private $_repository_offer;

	/**
	 * @var Validate_Coupon_Offer
	 */
	private $_validate_offer;

	public function __construct($repository_offer, $validate_offer)
	{
		$this->_repository_offer = $repository_offer;
		$this->_validate_offer = $validate_offer;
	}

	public function execute($offer_id, array $fields)
	{
		$offer = $this->_repository_offer->load_object(array(array('id', '=', $offer_id)));
		$offer->coupon_shop_id 		= Arr::get($fields, 'coupon_shop_id');
		$offer->coupon_category_id 	= Arr::get($fields, 'coupon_category_id');
		$offer->title 				= Arr::get($fields, 'title', '');
		$offer->description 		= Arr::get($fields, 'description', '');
		$offer->url 				= Arr::get($fields, 'url', '');
		$offer->coupon_code 		= Arr::get($fields, 'coupon_code', '');
		$offer->start_date 			= Arr::get($fields, 'start_date', '');
		$offer->end_date 			= Arr::get($fields, 'end_date', '');
		$offer->type 				= Arr::get($fields, 'type', '');
		$offer->modified 			= date('Y-m-d H:i:s');

		$this->_validate_offer($offer);

		return $this->_repository_offer->update($offer);
	}

	private function _validate_offer(Entity_Coupon_offer $offer)
	{
		$this->_validate_offer->load($offer->as_array());
		$this->_validate_offer->default_rules();

		if ($this->_validate_offer->check() !== TRUE)
		{
			throw new Validate_Exception('This coupon offer is invalid !', $this->_validate_offer->errors(), $offer);
		}
	}
}