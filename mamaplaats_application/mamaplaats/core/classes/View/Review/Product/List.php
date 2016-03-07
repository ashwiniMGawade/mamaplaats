<?php defined('SYSPATH') or die('No direct script access.');

class View_Review_Product_List extends View_Review_Product_Items {

	use View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Reviews van onze testmoeders';
	public $description = 'Wil jij ook leuke mamaproducten testen en houden? Kijk dan gauw welke acties er lopen en volg de bevindingen ons testpanel!';

}