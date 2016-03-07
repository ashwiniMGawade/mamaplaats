<?php

class Image_Convert {

	private $_image_types = array(
		'jpg', 'gif', 'png'
	);

	public function convert(File_Object $file, $new_type)
	{
		$path_info = pathinfo($file->path);

		if ( ! in_array($new_type, $this->_image_types))
		{
			Throw new Exception('Invalid image type to convert to');
		}

		$new_path = $path_info['dirname'].'/'.$path_info['filename'].'.'.$new_type;

		Image::factory($file->path)->save($new_path);

		return $new_path;
	}
}