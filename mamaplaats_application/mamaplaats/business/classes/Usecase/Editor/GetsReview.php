<?php

class Usecase_Editor_GetsReview {

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

	public function execute($review_id)
	{
		$review 	= $this->_repository_review->load_object(array(array('id', '=', $review_id)));
		$user 		= $this->_repository_user->load_object(array(array('id', '=', $review->user_id)));
		$product 	= $this->_repository_review_product->load_object(array(array('id', '=', $review->review_product_id)));
		$media		= $this->_repository_media->load_set_linked('review', $review->id, array('reviews_media.review_section_id'));

		return array('user' => $user, 'review' => $review, 'product' => $product, 'media' => $media);
	}
}