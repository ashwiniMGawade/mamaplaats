<?php

class Usecase_Admin_CleansUpDeniedReviews {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	public function __construct($repository_review)
	{
		$this->_repository_review = $repository_review;
	}

	public function execute()
	{
		$filters = array(
			array('created', '<', date('Y-m-d H:i:s', strtotime('-2 months'))),
			array('status', '=', 'denied'),
		);

		$this->_repository_review->mass_delete($filters);
	}
}