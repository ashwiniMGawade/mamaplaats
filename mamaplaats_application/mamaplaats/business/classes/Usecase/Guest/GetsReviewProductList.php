<?php

class Usecase_Guest_GetsReviewProductList {

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_review_product)
	{
		$this->_repository_review_product = $repository_review_product;
	}

	public function execute()
	{
		$review_products = $this->_repository_review_product->load_set_by_status('coming');

		$products = array();
		foreach ($review_products as $review_product)
		{
			$products[] = array('product' => $review_product, 'review' => new Entity_Review(array('status' => '')));
		}

		return $products;
	}
}