<?php

class Usecase_Editor_GetsReviewListForProduct {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	public function __construct($repository_review)
	{
		$this->_repository_review = $repository_review;
	}

	public function execute($product_id)
	{
		return $this->_repository_review->load_set_with_users(array(array('review_product_id', '=', $product_id)));
	}
}