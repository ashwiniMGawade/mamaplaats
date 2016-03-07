<?php

class Media_Update {

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

	public function update($linked_name, $linked_id, $user_id, $media_item, $extra_fields = array())
	{
		if ( ! empty($media_item['id']))
		{
			$media = $this->_repository_media->load_object(array(array('id', '=', $media_item['id'])));

			$media->set_fields($media_item);

			$this->_validate_media($media);
			$this->_repository_media->update($media);
			$this->_repository_media->link($media, $linked_name, $linked_id, $extra_fields);
		}
		elseif ( ! empty($media_item['title']))
		{
			$media = new Entity_Media;
			$media->set_fields(array_merge($media_item, array(
				'user_id' 		=> $user_id,
				'description' 	=> '',
				'created' 		=> date('Y-m-d H:i:s')
			)));

			$this->_validate_media($media);

			$media = $this->_repository_media->create($media);
			$this->_repository_media->link($media, $linked_name, $linked_id, $extra_fields);
		}
	}

	private function _validate_media(Entity_Media $media)
	{
		$this->_validate_media->load($media->as_array());
		$this->_validate_media->default_rules();

		if ($this->_validate_media->check() !== TRUE)
		{
			throw new Validate_Exception('This media item is invalid !', $this->_validate_media->errors());
		}
	}
}