<?php

class File_Validate {

	private $_allowed_types = array(
		'png' => 'image/png',
		'jpg' => 'image/jpeg',
		'gif' => 'image/gif',
		'webm' => 'video/webm',
		'mpeg4' => 'video/mp4',
		'3gpp' => 'video/3gpp',
		'mov' => 'video/quicktime',
		'avi' => 'video/x-msvideo',
		'mkv' => 'video/x-matroska',
		'wmv' => 'video/x-ms-wmv',
		'flv' => 'video/x-flv',
		'mpegps' => 'video/MP2P',
	);


	public function validate(File_Object $file, array $allowed_types)
	{
		$verified_types = array();
		foreach ($this->_allowed_types as $allowed_type => $mime_type)
		{
			if (in_array($allowed_type, $allowed_types))
			{
				$verified_types[] = $mime_type;
			}
		}

		if ( ! in_array($file->mime_type, $verified_types))
		{
			throw new Exception('This is not an valid file!');
		}
	}

	public function size_not_more_than(File_Object $file, $mb_size_limit)
	{
		if ($file->size > ($mb_size_limit * 1024 * 1024))
		{
			throw new Exception('Image is too big!');
		}
	}
} 