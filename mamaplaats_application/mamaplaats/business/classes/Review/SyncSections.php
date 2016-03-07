<?php

class Review_SyncSections {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_review, $repository_review_product)
	{
		$this->_repository_review = $repository_review;
		$this->_repository_review_product = $repository_review_product;
	}

	public function sync_by_product_id($product_id)
	{
		$product = $this->_repository_review_product->load_object(array(array('id', '=', $product_id)));
		$reviews = $this->_repository_review->load_set(array(
			array('review_product_id', '=', $product_id),
			array('status', 'IN', array('approved', 'published')),
		));

		foreach ($reviews as $review)
		{
			// Reload the review but this time with the sections
			$review = $this->_repository_review->load_object(array(array('id', '=', $review->id)));

			$this->_sync_sections($review, array_column($product->sections, 'id'));
			$this->_sync_ratings($review, array_column($product->ratings, 'id'));
		}

		return TRUE;
	}

	public function sync_by_review_id($review_id)
	{
		$review = $this->_repository_review->load_object(array(
			array('id', '=', $review_id),
			array('status', 'IN', array('approved', 'published')),
		));

		if (empty($review->id))
		{
			return FALSE;
		}

		$product = $this->_repository_review_product->load_object(array(array('id', '=', $review->review_product_id)));

		$review = $this->_sync_sections($review, array_column($product->sections, 'id'));
		$review = $this->_sync_ratings($review, array_column($product->ratings, 'id'));

		$this->_repository_review->update($review);

		return TRUE;
	}

	private function _sync_sections($review, array $product_section_ids)
	{
		// Delete Review Sections that don't exist anymore in the product sections
		foreach ($review->sections as $i => $review_section)
		{
			if ( ! in_array($review_section['review_product_section_id'], $product_section_ids))
			{
				unset($review->sections[$i]);
			}
		}

		$review_product_section_ids = array_column($review->sections, 'review_product_section_id');

		// Add Review Sections that don't exist yet but do in the product sections
		foreach ($product_section_ids as $product_section_id)
		{
			if ( ! in_array($product_section_id, $review_product_section_ids))
			{
				$review->sections[] = array(
					'id' => NULL,
					'review_product_section_id' => $product_section_id,
					'content' => '',
					'rating' => 0.0,
				);
			}
		}

		return $review;
	}

	private function _sync_ratings($review, array $product_rating_ids)
	{
		// Delete Review Ratings that don't exist anymore in the product sections
		foreach ($review->ratings as $i => $review_rating)
		{
			if ( ! in_array($review_rating['review_product_rating_id'], $product_rating_ids))
			{
				unset($review->ratings[$i]);
			}
		}

		$review_product_rating_ids = array_column($review->ratings, 'review_product_rating_id');

		// Add Review Ratings that don't exist yet but do in the product sections
		foreach ($product_rating_ids as $product_rating_id)
		{
			if ( ! in_array($product_rating_id, $review_product_rating_ids))
			{
				$review->ratings[] = array(
					'id' => NULL,
					'review_product_rating_id' => $product_rating_id,
					'rating' => 0.0,
				);
			}
		}

		return $review;
	}
}