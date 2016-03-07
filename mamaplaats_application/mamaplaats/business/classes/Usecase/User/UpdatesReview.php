<?php

class Usecase_User_UpdatesReview {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Validate_Template
	 */
	private $_validate_template;

	/**
	 * @var Review_RatingHelper
	 */
	private $_review_rating_helper;

	public function __construct($repository_review, $validate_template, $review_rating_helper)
	{
		$this->_repository_review 	= $repository_review;
		$this->_validate_template 	= $validate_template;
		$this->_review_rating_helper = $review_rating_helper;
	}

	public function execute(Entity_User $user, Entity_Review $review, $is_finished = FALSE)
	{
		if ($user->id !== $review->user_id)
		{
			throw new Exception('User not allowed to update this review');
		}

		$review->ratings = $this->_review_rating_helper->format($review->ratings);
		$review->rating_overal = $this->_review_rating_helper->calculate_overal($review->ratings);

		$this->_repository_review->update($review);

		if ($is_finished === TRUE)
		{
			$this->_validate_review($review);
		}

		return $review;
	}

	private function _validate_review(Entity_Review $review)
	{
		$errors = array();

		$validate_review = $this->_validate_template;
		$validate_review->load($review->as_array());
		$validate_review->rules(array(
			'id' 			=> array(array('digit')),
			'title'			=> array(array('not_empty')),
			'information'	=> array(array('not_empty'), array('max_length', array(':value', 560))),
			'rating_overal'	=> array(array('numeric')),
		));

		if ($validate_review->check() !== TRUE)
		{
			$errors = array_merge($errors, $validate_review->errors());
		}

		foreach ($review->sections as $section)
		{
			$validate_section = $this->_validate_template;
			$validate_section->load(array('section_content' => $section['content']));
			$validate_section->rules(array('section_content' => array(array('not_empty'))));

			if ($validate_section->check() !== TRUE)
			{
				$errors = array_merge($errors, $validate_section->errors());
			}
		}

		foreach ($review->ratings as $rating)
		{
			$validate_rating = $this->_validate_template;
			$validate_rating->load(array('rating_rating' => $rating['rating']));
			$validate_rating->rules(array('rating_rating' => array(array('numeric'), array('range', array(':value', 1, 10)))));

			if ($validate_rating->check() !== TRUE)
			{
				$errors = array_merge($errors, $validate_rating->errors());
			}
		}

		if ( ! empty($errors))
		{
			throw new Validate_Exception('Invalid review posted', $errors, $review);
		}
	}
}