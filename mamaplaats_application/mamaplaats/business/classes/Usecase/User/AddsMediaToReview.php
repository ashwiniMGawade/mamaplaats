<?php

class Usecase_User_AddsMediaToReview {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	/**
	 * @var Validate_Media
	 */
	private $_validate_media;

	public function __construct($repository_review, $repository_media, $validate_media)
	{
		$this->_repository_review = $repository_review;
		$this->_repository_media = $repository_media;
		$this->_validate_media = $validate_media;
	}

	public function execute(Entity_User $user, $review_id, array $fields, $extra_info = array())
	{
		$review = $this->_repository_review->load_object(array(array('id', '=', $review_id)));
		if ($review->user_id != $user->id)
		{
			throw new Exception('User not allowed to add media to this review');
		}

		$media = new Entity_Media($fields);
		$media->user_id 	= $user->id;
		$media->title 		= $fields['title'];
		$media->description = $fields['description'];
		$media->path 		= $fields['path'];
		$media->type 		= $fields['type'];
		$media->created 	= date('Y-m-d H:i:s');

		$this->_validate_media($media);

		$media = $this->_repository_media->create($media);
		$this->_repository_media->link($media, 'review', $review_id, $extra_info);

		return $media;
	}

	public function _validate_media(Entity_Media $media)
	{
		$this->_validate_media->load($media->as_array());
		$this->_validate_media->default_rules();

		if ($this->_validate_media->check() !== TRUE)
		{
			throw new Validate_Exception('This media item is invalid !', $this->_validate_media->errors());
		}
	}
}