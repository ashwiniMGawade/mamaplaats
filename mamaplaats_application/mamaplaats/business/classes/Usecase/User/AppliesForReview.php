<?php

class Usecase_User_AppliesForReview {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Validate_Template
	 */
	private $_validate;

	public function __construct($repository_review, $validate)
	{
		$this->_repository_review = $repository_review;
		$this->_validate = $validate;
	}

	public function execute(Entity_User $user, Entity_Review_Product $product, $fields)
	{
		$review = new Entity_Review;
		$review->review_product_id = $product->id;
		$review->user_id 		= $user->id;
		$review->slug 			= URL::title($product->title.' getest door '.$user->full_name());
		$review->answer_phone 	= Arr::get($fields, 'answer_phone', '');
		$review->phone_access      = Arr::get($fields, 'phone_access', '');
		$review->answer_address = Arr::get($fields, 'answer_address', '');
		$review->answer_zip 	= Arr::get($fields, 'answer_zip', '');
		$review->answer_place 	= Arr::get($fields, 'answer_place', '');
		$review->answer_reason 	= Arr::get($fields, 'answer_reason', '');
		$review->answer_extra1 	= Arr::get($fields, 'answer_extra1', '');
		$review->answer_extra2 	= Arr::get($fields, 'answer_extra2', '');
		$review->answer_extra3 	= Arr::get($fields, 'answer_extra3', '');
		$review->created 		= date('Y-m-d H:i:s');

		// Validate The Application
		$this->_validate_application($product, $review);

		$this->_repository_review->create($review);
	}

	private function _validate_application(Entity_Review_Product $product, Entity_Review $review)
	{
		$extra_question_rules = array();
		for ($i=1; $i>3; $i++)
		{
			if ( ! empty($product->{'question_extra'.$i}))
			{
				$extra_question_rules['answer_extra'.$i] = array(array('not_empty'));
			}
		}

		$this->_validate->load($review->as_array());
		$this->_validate->rules(array_merge(array(
			'answer_phone'		=> array(array('not_empty')),
			'answer_address' 	=> array(array('not_empty')),
			'answer_zip' 		=> array(array('not_empty')),
			'answer_place' 		=> array(array('not_empty')),
			'answer_reason' 	=> array(array('not_empty')),
		), $extra_question_rules));

		if ($this->_validate->check() !== TRUE)
		{
			throw new Validate_Exception('Invalid blog posted', $this->_validate->errors());
		}
	}
}