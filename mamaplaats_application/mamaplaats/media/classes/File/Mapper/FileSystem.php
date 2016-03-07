<?php defined('SYSPATH') or die('No direct script access.');

class File_Mapper_FileSystem {

	public function map($path)
	{
		$file = new File_Object;
		$file->name 		= basename($path);
		$file->path 		= $path;
		$file->size 		= filesize($path);
		$file->mime_type 	= finfo_file(finfo_open(FILEINFO_MIME_TYPE), $path);

		return $file;
	}
}