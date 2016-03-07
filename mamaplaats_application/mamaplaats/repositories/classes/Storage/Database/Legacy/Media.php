<?php

class Storage_Database_Legacy_Media extends Storage_Database_Translate implements Repository_Legacy_Media {

	protected $_table_name = 'wp_posts';
	protected $_entity_class = 'Entity_Media';

	protected $_field_translate = array(
		'ID' 					=> 'id',
		'post_author'			=> 'user_id',
		'post_title' 			=> 'title',
		'guid' 					=> 'path',
		'post_mime_type' 		=> 'type',
		'post_date' 			=> 'created',
	);

	public function create($entity)
	{
		$gmdate = gmdate('Y-m-d H:i:s', strtotime($entity->created));
		$media 	= array(
			'post_mime_type' 	=> $entity->type,
			'guid' 				=> $entity->path,
			'post_parent' 		=> ( ! empty($entity->post_id)) ? $entity->post_id : 0,
			'post_author' 		=> $entity->user_id,
			'post_title' 		=> $entity->title,
			'post_content' 		=> '',
			'post_type' 		=> 'attachment',
			'post_date' 		=> $entity->created,
			'post_date_gmt' 	=> $gmdate,
			'post_modified' 	=> $entity->created,
			'post_modified_gmt' => $gmdate,
			'comment_status' 	=> 'closed',
			'ping_status' 		=> 'closed',
		);

		$insert = $this->_query_builder->insert();
		$query 	= $insert->table($this->_table_name)->columns(array_keys($media))->values($media)->execute($this->_database);
		$entity->id = $query[0];

		return $entity;
	}
}