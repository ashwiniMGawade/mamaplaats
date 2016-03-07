<?php

class View_Coupon_Offer_Free {

	use View_Helper_ImagePath, View_Helper_Coupon, View_Helper_PregnancyCalander;

	public $title = 'Gratis acties';
	public $description = 'Bekijk onze acties voor gratis producten voor mama en kind.';
	public $widgets;

	private $_free_offers;

	public function __construct($free_offers, $widgets)
	{
		$this->_free_offers = $free_offers;
		$this->widgets = $widgets;
	}

	public function free_offers()
	{
		return $this->format_coupon_offers($this->_free_offers, '/korting/gratis');
	}
}