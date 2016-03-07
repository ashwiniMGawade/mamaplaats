<?php

class Usecase_Editor_DeletesMedia {

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_media)
	{
		$this->_repository_media = $repository_media;
	}

	public function execute($media_id)
	{
		$media = $this->_repository_media->load_object(array(array('id', '=', $media_id)));
		return $this->_repository_media->delete($media);
	}
}