<?php

class Usecase_Guest_GetsRunningReviewProducts {

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_review_product)
	{
		$this->_repository_review_product = $repository_review_product;
	}

	public function execute($page)
	{
		$limit = 15;
		$offset = ($limit * $page) - $limit;

		return $this->_repository_review_product->load_set_by_status('running', $limit, $offset);
	}
}