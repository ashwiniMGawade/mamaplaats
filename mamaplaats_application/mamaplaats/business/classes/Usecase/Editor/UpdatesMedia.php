<?php

class Usecase_Editor_UpdatesMedia {

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	/**
	 * @var Validate_Media
	 */
	private $_validate_media;

	public function __construct($repository_media, $validate_media)
	{
		$this->_repository_media = $repository_media;
		$this->_validate_media = $validate_media;
	}

	public function execute($media_id, array $fields)
	{
		$media = $this->_repository_media->load_object(array(array('id', '=', $media_id)));
		$media->set_fields($fields);

		$this->_validate_media($media);

		return $this->_repository_media->update($media);
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