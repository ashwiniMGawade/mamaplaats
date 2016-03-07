<?php

class View_Coupon_Offer_MostPopular {

	use View_Helper_ImagePath, View_Helper_Coupon, View_Helper_PregnancyCalander;

	public $title = '20 meest populaire kortingscodes en acties';
	public $description = 'Onze meest populaire kostingscodes en acties van dit moment voor mama en kind.';
	public $widgets;

	private $_popular_offers;

	public function __construct($popular_offers, $widgets)
	{
		$this->_popular_offers = $popular_offers;
		$this->widgets = $widgets;
	}

	public function popular_offers()
	{
		return $this->format_coupon_offers($this->_popular_offers, '/korting/meest-populair');
	}
}