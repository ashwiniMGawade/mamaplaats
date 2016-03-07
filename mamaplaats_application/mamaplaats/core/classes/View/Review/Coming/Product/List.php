<?php defined('SYSPATH') or die('No direct script access.');

class View_Review_Coming_Product_List {

	use View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Aanmelden Reviews';
	public $description = 'Wil jij ook leuke mamaproducten testen en houden? Kijk dan gauw welke acties er lopen en volg de bevindingen ons testpanel!';

	private $_user;
	private $_review_products;
	private $_reviewed_products;

	public function __construct($user, $review_products, $reviewed_products)
	{
		$this->_user = $user;
		$this->_review_products = $review_products;
		$this->_reviewed_products = $reviewed_products;
	}

	public function review_products()
	{
		$review_products = array();
		foreach ($this->_review_products as $review_product)
		{
			$review = $review_product['review'];

			$product = $review_product['product'];
			$product->image_url		= URL::site($product->image_url, TRUE);
			$product->description 	= substr(strip_tags($product->description), 0, 140).'...';
			$product->review_id		= $review->id;
			$product->status_link 	= $this->_get_status_link($review, $product);

			$review_products[] = $product;
		}

		return $review_products;
	}

	public function reviewed_products()
	{
		$products = array();
		foreach ($this->_reviewed_products as $product)
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

	private function _get_status_link($review, Entity_Review_Product $product)
	{
		$statuses = array(
			'' => array(
				'tag' => 'Inschrijven',
				'url' => '/user/review-product/'.$product->id.'/apply',
			),
			'waiting' => array(
				'tag' => 'Ingeschreven',
				'url' => '',
			),
			'denied' => array(
				'tag' => 'Ingeschreven',
				'url' => '',
			),
			'approved' => array(
				'tag' => 'Schrijf Review',
				'url' => '/user/review/'.$review->id,
			),
			'published' => array(
				'tag' => 'Schrijf Review',
				'url' => '/user/review/'.$review->id,
			),
		);

		return $statuses[$review->status];
	}
}