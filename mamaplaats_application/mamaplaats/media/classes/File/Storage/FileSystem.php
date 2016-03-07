<?php defined('SYSPATH') or die('No direct script access.');

class File_Storage_FileSystem implements File_Storage_Interface {

	private $_config;

	public function __construct(array $config)
	{
		$this->_config = $config;
	}

	public function store($path, File_Object $file, array $params = array())
	{
		$old_path = $file->path;
		$new_path = $this->_config['store_path'].$path.'/'.$file->name;

		if (isset($params['rename']) AND $params['rename'] === TRUE)
		{
			$new_path = $this->_rename_file_if_exists($new_path);
		}
		else
		{
			// Remove the old file
			@unlink($new_path);
		}

		// Now copy the new file there
		@mkdir($this->_config['store_path'].$path, 0777, TRUE);
		copy($old_path, $new_path);

		$file->path = $new_path;

		return $file;
	}

	public function get($path)
	{
		$path = $this->_config['store_path'].$path;

		if (file_exists($path) === FALSE)
		{
			throw new Exception('File not Found');
		}

		$file_mapper = new File_Mapper_FileSystem;

		return $file_mapper->map($path);
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