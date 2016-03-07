<?php

class Usecase_Guest_GetsProductReview {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_user, $repository_review, $repository_review_product, $repository_media)
	{
		$this->_repository_user 			= $repository_user;
		$this->_repository_review 			= $repository_review;
		$this->_repository_review_product 	= $repository_review_product;
		$this->_repository_media 			= $repository_media;
	}

	public function execute($review_slug)
	{
		$review 	= $this->_repository_review->load_object(array(array('slug', '=', $review_slug)));
		$user 		= $this->_repository_user->load_object(array(array('id', '=', $review->user_id)));
		$media		= $this->_repository_media->load_set_linked('review', $review->id, array('review_section_id'));

		return array('user' => $user, 'review' => $review, 'media' => $media);
	}
}