<?php

class Usecase_Guest_GetsReviewedProductList {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_review, $repository_review_product)
	{
		$this->_repository_review 			= $repository_review;
		$this->_repository_review_product 	= $repository_review_product;
	}

	public function execute($limit, $offset = 0)
	{
		return $this->_repository_review_product->load_set_by_status('finished', (int) $limit, (int) $offset);
	}
}