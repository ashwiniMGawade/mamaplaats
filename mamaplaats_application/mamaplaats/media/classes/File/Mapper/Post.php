<?php defined('SYSPATH') or die('No direct script access.');

class File_Mapper_Post {

	public function map($post_file)
	{
		$file = new File_Object;
		$file->name 		= $post_file['name'];
		$file->path 		= $post_file['tmp_name'];
		$file->size 		= $post_file['size'];
		$file->mime_type 	= finfo_file(finfo_open(FILEINFO_MIME_TYPE), $post_file['tmp_name']);

		return $file;
	}
}