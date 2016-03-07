<?php

class Usecase_Editor_GetsReviewProduct {

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_review_product, $repository_review, $repository_media)
	{
		$this->_repository_review_product = $repository_review_product;
		$this->_repository_review = $repository_review;
		$this->_repository_media = $repository_media;
	}

	public function execute($review_product_id)
	{
		$review_product = $this->_repository_review_product->load_object(array(array('id', '=', $review_product_id)));
		if (empty($review_product->id))
		{
			return array('product' => new Entity_Review_Product, 'reviews' => array(), 'media' => array());
		}

		$reviews = $this->_repository_review->load_set_with_users(array(array('review_product_id', '=', $review_product->id)));
		$media = $this->_repository_media->load_set_linked('review_product', $review_product->id);

		return array('product' => $review_product, 'reviews' => $reviews, 'media' => $media);
	}
}