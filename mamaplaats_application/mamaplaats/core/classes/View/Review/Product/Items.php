<?php defined('SYSPATH') or die('No direct script access.');

class View_Review_Product_Items {

	private $_products;

	public function __construct($products)
	{
		$this->_products = $products;
	}

	public function products()
	{
		$products = array();
		foreach ($this->_products as $product)
		{
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
}