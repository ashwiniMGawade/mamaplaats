<?php defined('SYSPATH') or die('No direct script access.');

class File_Mapper_Base64 {

	public function map($base_file)
	{
		$tmp_name = $this->_create_tmp_file($base_file['content']);

		$file = new File_Object();
		$file->name 		= $base_file['name'];
		$file->path 		= $tmp_name;
		$file->size 		= filesize($tmp_name);
		$file->mime_type 	= finfo_file(finfo_open(FILEINFO_MIME_TYPE), $tmp_name);

		return $file;
	}

	private function _create_tmp_file($file_content)
	{
		$tmp = tempnam(sys_get_temp_dir(), 'baseupload');
		file_put_contents($tmp, base64_decode($file_content));

		return $tmp;
	}
}