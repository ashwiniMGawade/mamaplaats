<?php

class Usecase_Editor_GetsReviewProductList {

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
		return $this->_repository_review_product->load_set(array());
	}
}