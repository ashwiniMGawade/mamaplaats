<?php defined('SYSPATH') or die('No direct script access.');

class File_Storage_Factory {

	public static function file_system()
	{
		$config = Kohana::$config->load('media')->as_array();
		return new File_Storage_FileSystem($config);
	}

	public static function wordpress()
	{
		$config = Kohana::$config->load('media')->as_array();
		return new File_Storage_Wordpress($config);
	}

	public static function youtube()
	{
		$config = Kohana::$config->load('google_api')->as_array();
		return new File_Storage_Youtube($config);
	}
}