<?php

class Widget_LatestReview {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	public function __construct($repository_review)
	{
		$this->_repository_review = $repository_review;
	}

	public function load()
	{
		return $this->_repository_review->load_set_advanced(
			array(array('reviews.status', '=', 'approved')),
			'reviews.id', 'DESC',
			1, 0
		);
	}
}