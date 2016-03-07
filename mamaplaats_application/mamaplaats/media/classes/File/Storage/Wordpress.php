<?php defined('SYSPATH') or die('No direct script access.');

class File_Storage_Wordpress implements File_Storage_Interface {

	private $_config;

	public function __construct(array $config)
	{
		$this->_config = $config;
	}

	public function store($path, File_Object $file, array $params = array())
	{
		$old_path = $file->path;
		$new_path = $this->_rename_file_if_exists($this->_config['wordpress_path'].$file->name);

		@mkdir($this->_config['wordpress_path'], 0777, TRUE);
		copy($old_path, $new_path);

		$file->path = $new_path;

		return $file;
	}

	public function get($path)
	{
		// This function wont work
	}

	public function remove(File_Object $file)
	{
		unlink($file->path);
	}

	private function _rename_file_if_exists($path)
	{
		$file = pathinfo($path);

		$i = 1;
		while (file_exists($path))
		{
			$path = $file['dirname'].'/'.$file['filename'].'_'.$i.'.'.$file['extension'];
			$i++;
		}

		return $path;
	}
}