<?php

class View_Coupon_Category_List {

	use View_Helper_PregnancyCalander;

	public $title = 'Alle Categorieën';
	public $description = 'Vind kortingscodes en aanbiedingen voor mama en kind in al onze categorieën.';
	public $widgets;

	private $_categories;

	public function __construct($categories, $widgets)
	{
		$this->_categories = $categories;
		$this->widgets = $widgets;
	}

	public function categories()
	{
		return $this->_categories;
	}
}