<?php

class Usecase_User_GetsReviewApplication {

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_review_product)
	{
		$this->_repository_review_product = $repository_review_product;
	}

	public function execute($review_product_id)
	{
		return $this->_repository_review_product->load_object(array(array('id', '=', $review_product_id)));
	}
}