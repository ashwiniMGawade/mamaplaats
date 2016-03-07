<?php

class Usecase_Editor_UpdatesReview {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Validate_Review
	 */
	private $_validate_review;

	/**
	 * @var Media_Update
	 */
	private $_media_update;

	/**
	 * @var Review_SyncSections
	 */
	private $_review_sync_sections;

	/**
	 * @var Review_RatingHelper
	 */
	private $_review_rating_helper;

	public function __construct($repository_review, $validate_review, $media_update, $review_sync_sections, $review_rating_helper)
	{
		$this->_repository_review = $repository_review;
		$this->_validate_review = $validate_review;
		$this->_media_update = $media_update;
		$this->_review_sync_sections = $review_sync_sections;
		$this->_review_rating_helper = $review_rating_helper;
	}

	public function execute($review_id, array $fields)
	{
		$review = $this->_repository_review->load_object(array(array('id', '=', $review_id)));
		$old_status = $review->status;

		$review->set_fields($fields);
		$review->rating_overal = $this->_review_rating_helper->calculate_overal($review->ratings);

		if ($old_status != 'published' AND $review->status == 'published')
		{
			$review->published = date('Y-m-d H:i:s');
		}

		if ($this->_valid_review($review) !== TRUE)
		{
			throw new Validate_Exception('This review is invalid !', $this->_validate_review->errors(), $review);
		}

		// Update the review and the media
		$review = $this->_repository_review->update($review);
		$this->_update_review_media($review->id, $fields['media']);

		// Add update or delete the review sections
		$this->_review_sync_sections->sync_by_review_id($review->id);

		return $review;
	}

	private function _valid_review(Entity_Review $review)
	{
		$this->_validate_review->load($review->as_array());
		$this->_validate_review->default_rules();

		return $this->_validate_review->check();
	}

	private function _update_review_media($review_id, $media_items)
	{
		foreach ($media_items as $media_item)
		{
			$extra_fields = array('review_section_id' => NULL);
			if ( ! empty($media_item['review_section_id']))
			{
				$extra_fields = array('review_section_id' => $media_item['review_section_id']);
			}

			$this->_media_update->update('review', $review_id, 1, $media_item, $extra_fields);
		}
	}
}