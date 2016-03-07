<?php

class View_Coupon_Offer_Newest {

	use View_Helper_ImagePath, View_Helper_Coupon, View_Helper_PregnancyCalander;

	public $title = 'Nieuwste kortingscodes en acties';
	public $description = 'Onze nieuwste kostingscodes en acties voor mama en kind.';
	public $widgets;

	private $_newest_offers;

	public function __construct($newest_offers, $widgets)
	{
		$this->_newest_offers = $newest_offers;
		$this->widgets = $widgets;
	}

	public function newest_offers()
	{
		return $this->format_coupon_offers($this->_newest_offers, '/korting/nieuwste');
	}
}