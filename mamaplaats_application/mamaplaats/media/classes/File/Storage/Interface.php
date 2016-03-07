<?php defined('SYSPATH') or die('No direct script access.');

interface File_Storage_Interface {

	/**
	 * @param array $config The Config Information
	 */
	public function __construct(array $config);

	/**
	 * Store the File in a path
	 *
	 * @param string $path
	 * @param File_Object $file The file object that you want to store
	 * @param array $params Extra information that the storage might need
	 * @return mixed
	 */
	public function store($path, File_Object $file, array $params = array());

	/**
	 * Get the File By File Path
	 *
	 * @param string $path
	 * @return mixed
	 */
	public function get($path);

	/**
	 * Delete a file from a category
	 *
	 * @param File_Object $file The file object that you want to delete
	 * @return mixed
	 */
	public function remove(File_Object $file);
}