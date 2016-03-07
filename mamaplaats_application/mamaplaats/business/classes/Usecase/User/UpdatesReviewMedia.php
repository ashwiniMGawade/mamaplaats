<?php

class Usecase_User_UpdatesReviewMedia {

	/**
	 * @var Repository_Review
	 */
	private $_repository_review;

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_review, $repository_media)
	{
		$this->_repository_review = $repository_review;
		$this->_repository_media = $repository_media;
	}

	public function execute(Entity_User $user, $review_id, array $media)
	{
		$review = $this->_repository_review->load_object(array(array('id', '=', $review_id)));
		if ($review->user_id !== $user->id)
		{
			throw new Exception('User not allowed to update this review');
		}

		foreach ($media as $media_item)
		{
			$media = $this->_repository_media->load_object(array(array('id', '=', $media_item['id'])));
			if ( ! empty($media) AND $media->user_id == $user->id)
			{
				$media->title 		= Arr::get($media_item, 'title', '');
				$media->description = Arr::get($media_item, 'description', '');

				$this->_repository_media->update($media);
			}
		}
	}
}