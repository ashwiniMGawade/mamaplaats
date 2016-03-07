<?php

class Usecase_Guest_GetsReviewProduct {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_review, $repository_review_product, $repository_user, $repository_media)
	{
		$this->_repository_review 			= $repository_review;
		$this->_repository_review_product 	= $repository_review_product;
		$this->_repository_user 			= $repository_user;
		$this->_repository_media 			= $repository_media;
	}

	public function execute($product_slug)
	{
		$now = date('Y-m-d');
		$product = $this->_repository_review_product->load_object(array(array('slug', '=', $product_slug)));

		if (empty($product))
		{
			throw new Exception('No Product with this Slug found');
		}

		$user = $this->_repository_user->load_object(array(array('id', '=', $product->user_id)));

		// Show reviews when published else show media
		$reviews = array();
		$media = array();
		if ($product->application_end_date <= $now)
		{
			$reviews = $this->_repository_review->load_set_with_users(array(
				array('review_product_id', '=', $product->id),
				array('reviews.status', 'IN', array('approved', 'published')),
			));
		}
		else
		{
			$media = $this->_repository_media->load_set_linked('review_product', $product->id);
		}

		$related = $this->_repository_review_product->load_set_advanced(
			array(
				array('category_id', '=', $product->category_id),
				array('id', '!=', $product->id),
				array('application_end_date', '<=', $now),
			),
			NULL, 'ASC',
			3, 0
		);

		return array('user' => $user, 'product' => $product, 'reviews' => $reviews, 'media' => $media, 'related' => $related);
	}
}