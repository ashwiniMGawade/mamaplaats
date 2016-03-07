<?php defined('SYSPATH') or die('No direct script access.');

class File_Mapper_Factory {

	public static function base64()
	{
		return new File_Mapper_Base64;
	}

	public static function file_system()
	{
		return new File_Mapper_FileSystem;
	}

	public static function post()
	{
		return new File_Mapper_Post;
	}
}