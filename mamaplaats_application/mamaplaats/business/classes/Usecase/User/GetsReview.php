<?php

class Usecase_User_GetsReview {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_product;

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_review, $repository_product, $repository_media)
	{
		$this->_repository_review 	= $repository_review;
		$this->_repository_product 	= $repository_product;
		$this->_repository_media 	= $repository_media;
	}

	public function execute(Entity_User $user, $review_id)
	{
		$review = $this->_repository_review->load_object(array(array('id', '=', $review_id)));

		if (empty($review))
		{
			throw new Exception('No review with this ID Found');
		}

		if ($review->user_id !== $user->id)
		{
			throw new Exception('User not allowed to view this review');
		}

		$media = $this->_repository_media->load_set_linked('review', $review->id, array('review_section_id'));

		return array($review, $media);
	}
}