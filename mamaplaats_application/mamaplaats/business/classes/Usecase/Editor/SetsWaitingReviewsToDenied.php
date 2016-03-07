<?php

class Usecase_Editor_SetsWaitingReviewsToDenied {

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
		$filters = array(
			array('review_product_id', '=', $product_id),
			array('status', '=', 'waiting'),
		);

		$this->_repository_review->mass_update_status($filters, 'denied');
	}
}