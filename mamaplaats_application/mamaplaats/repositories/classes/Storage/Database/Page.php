<?php

class Storage_Database_Page extends Storage_Database_Translate implements Repository_Page
{
	protected $_table_name = 'wp_posts';
	protected $_entity_class = 'Entity_Page';

	protected $_field_translate = array(
		'ID' 					=> 'id',
		'post_parent' 			=> 'parent_id',
		'post_author'			=> 'author_id',
		'post_name' 			=> 'slug',
		'post_title' 			=> 'title',
		'post_excerpt' 			=> 'excerpt',
		'post_content' 			=> 'content',
		'post_password' 		=> 'password',
		'post_status' 			=> 'status',
		'post_type' 			=> 'type',
		'ping_status' 			=> 'ping_status',
		'to_ping'	 			=> 'to_ping',
		'comment_status' 		=> 'comment_status',
		'comment_count' 		=> 'comment_count',
		'post_date' 			=> 'created',
		'post_date_gmt' 		=> 'created_gmt',
		'post_modified' 		=> 'modified',
		'post_modified_gmt' 	=> 'modified_gmt',
	);

	protected $_load_set_fields = array(
		array('page.ID', 'page_id'),
		array('page.post_title', 'page_title'),
		array('page.post_excerpt', 'page_excerpt'),
		array('page.post_date', 'page_created'),
		array('page.post_name', 'page_slug'),
		array('media.ID', 'media_id'),
		array('media.guid', 'media_path'),
		array('user.ID', 'user_id'),
		array('user.display_name', 'user_display_name'),
		array('user.user_nicename', 'user_slug'),
	);

	protected $_cats = array(19);

	public function load_object(array $parameters)
	{
		$page = parent::load_object(array_merge(array(array('type', '=', 'page')), $parameters));
		if ( ! empty($page->id))
		{
			$page->thumbnail_id = $this->_query_builder->select()->select('meta_value')
				->from('wp_postmeta')
				->where('post_id', '=', $page->id)
				->and_where('meta_key', '=', '_thumbnail_id')
				->execute($this->_database)
				->get('meta_value');
		}

		return $page;
	}

	public function load_meta_info($id)
	{
		return $this->_query_builder->select()
			->select('meta_key', 'meta_value')
			->from('wp_postmeta')
			->where('post_id', '=', $id)
			->execute($this->_database)
			->as_array('meta_key', 'meta_value');
	}

	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_load_set_fields);
		$select->from(array($this->_table_name, 'page'));
		$select->join(array('wp_postmeta', 'page_meta'), 'LEFT')->on('page_meta.post_id', '=', 'page.ID')->on('page_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'page_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'page.post_author');
		$select->where('page.post_status', '=', 'publish');
		$select->where('page.post_type', '=', 'page');

		// Filter Pages on Category
		$select->where('page.ID', 'IN', $this->_query_builder->select()
				->select('object_id')
				->from('wp_term_relationships')
				->where('term_taxonomy_id', 'IN', $this->_cats)
		);

		$this->where($select, $parameters);

		if ($order_by !== NULL)
		{
			$select->order_by($order_by, $direction);
		}

		if ($limit !== NULL AND $offset !== NULL)
		{
			$select->limit($limit);
			$select->offset($offset);
		}

		$results = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$results[] = array(
				'page' => new Entity_Page(Arr::filter_prefixed($result, 'page_')),
				'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
			);
		}

		return $results;
	}
}