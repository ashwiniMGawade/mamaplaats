<?php

class Usecase_User_DeletesMediaFromReview {

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_media)
	{
		$this->_repository_media = $repository_media;
	}

	public function execute(Entity_User $user, $media_id)
	{
		$media = $this->_repository_media->load_object(array(array('id', '=', $media_id)));
		if ($media->user_id != $user->id)
		{
			throw new Exception('User does now own this media');
		}

		$this->_repository_media->delete($media);

		return TRUE;
	}
}