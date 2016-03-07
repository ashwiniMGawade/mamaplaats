<?php defined('SYSPATH') or die('No direct script access.');

class View_Review_Running_Product_List {

	use View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Aanmelden Reviews';
	public $description = 'Wil jij ook leuke mamaproducten testen en houden? Kijk dan gauw welke acties er lopen en volg de bevindingen ons testpanel!';

	private $_user;
	private $_running_products;
	private $_finished_products;

	public function __construct($user, $running_products, $finished_products)
	{
		$this->_user = $user;
		$this->_running_products = $running_products;
		$this->_finished_products = $finished_products;
	}

	public function running_products()
	{
		$products = array();
		foreach ($this->_running_products as $product)
		{
			$product = clone $product;
			$product->average_rating = number_format($product->average_rating, 1);
			if ($product->average_rating == 0)
			{
				$product->average_rating = '';
			}

			$product->image_url = URL::site($product->image_url, TRUE);
			$product->description = substr(strip_tags($product->description), 0, 140).'...';
			$products[] = $product;
		}

		return $products;
	}

	public function finished_products()
	{
		$products = array();
		foreach ($this->_finished_products as $product)
		{
			$product->average_rating = number_format($product->average_rating, 1);
			if ($product->average_rating == 0)
			{
				continue;
			}

			$product->image_url		= URL::site($product->image_url, TRUE);
			$product->description 	= substr(strip_tags($product->description), 0, 140).'...';
			$products[] = $product;
		}

		return $products;
	}
}