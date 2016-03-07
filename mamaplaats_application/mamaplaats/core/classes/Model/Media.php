<?php defined('SYSPATH') or die('No direct script access.');

class Model_Media extends Model {

	private $_table_name 	= 'wp_posts';
	private $_directory 	= 'wordpress/wp-content/uploads/';

	public function upload_image($upload, $user_id, $post_id = NULL)
	{
		$uploaded_image = $this->_upload_image_to_filesystem($upload);

		if ($uploaded_image !== FALSE)
		{
			$image_record = $this->_save_image_record_in_database($uploaded_image, $user_id, $post_id);
			return array('id' => $image_record, 'path' => $uploaded_image['path']);
		}

		return FALSE;
	}

	public function add_media_item_and_link($media_item, $linked_name = NULL, $linked_id = NULL)
	{
		list($media_id, $affected_rows) = DB::insert('media', array_keys($media_item))->values($media_item)->execute();

		if (in_array($linked_name, array('test_review')))
		{
			DB::insert($linked_name.'s_media', array($linked_name.'_id', 'media_id'))->values(array($linked_id, $media_id))->execute();
		}

		return $media_id;
	}

	public function get_media_item($media_id)
	{
		return DB::select()->from('media')->where('id', '=', $media_id)->execute()->current();
	}

	public function delete_media_item($media_id)
	{
		DB::delete('media')->where('id', '=', $media_id)->execute();
	}

	public function update_media_item($medium, $media_id)
	{
		DB::update('media')->set($medium)->where('id', '=', $media_id)->execute();
	}

	private function _upload_image_to_filesystem($upload)
	{
		if (! Upload::valid($upload) OR
			! Upload::not_empty($upload) OR
			! Upload::type($upload, array('jpg', 'jpeg', 'png', 'gif')))
		{
			return FALSE;
		}

		$directory 	= $this->_directory.date('Y/m/d/');
		$mimetype 	= strtolower($upload['type']);
		$filename 	= strtolower($upload['name']);

		@ mkdir($directory, 0777, TRUE);
		if ($file = Upload::save($upload, $filename, $directory))
		{
			return array(
				'title' 	=> $filename,
				'path' 		=> $directory.$filename,
				'mimetype' 	=> $mimetype,
			);
		}

		return FALSE;
	}

	private function _save_image_record_in_database($uploaded_image, $user_id, $post_id)
	{
		$date 	= date('Y-m-d H:i:s');
		$gmdate = gmdate('Y-m-d H:i:s');

		$attachment = array(
			'post_mime_type' 	=> $uploaded_image['mimetype'],
			'guid' 				=> URL::site($uploaded_image['path']),
			'post_parent' 		=> ( ! empty($post_id)) ? $post_id : 0,
			'post_author' 		=> $user_id,
			'post_title' 		=> $uploaded_image['title'],
			'post_content' 		=> '',
			'post_type' 		=> 'attachment',
			'post_date' 		=> $date,
			'post_date_gmt' 	=> $gmdate,
			'post_modified' 	=> $date,
			'post_modified_gmt' => $gmdate,
			'comment_status' 	=> 'closed',
			'ping_status' 		=> 'closed',
		);

		return DB::insert($this->_table_name, array_keys($attachment))->values($attachment)->execute();
	}
}