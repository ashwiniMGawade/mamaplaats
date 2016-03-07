<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Offer_List {

	use View_Helper_Message;

	private $_offers;

	public function __construct(array $offers, $messages)
	{
		$this->_offers = $offers;
		$this->messages = $messages;
	}

	public function offers()
	{
		$offers = array();
		foreach ($this->_offers as $offer)
		{
			$offers[] = $offer;
		}

		return $offers;
	}
}