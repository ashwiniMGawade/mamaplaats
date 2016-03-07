<?php

class Storage_Database_Expert extends Storage_Database_Translate implements Repository_Expert
{
	protected $_table_name = 'wp_posts';
	protected $_entity_class = 'Entity_Expert';

	protected $_field_translate = array(
		'ID' 					=> 'id',
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
		'view_count' 			=> 'view_count',
		'post_date' 			=> 'created',
		'post_date_gmt' 		=> 'created_gmt',
		'post_modified' 		=> 'modified',
		'post_modified_gmt' 	=> 'modified_gmt',
	);

	protected $_load_set_fields = array(
		array('expert.ID', 'expert_id'),
		array('expert.post_author', 'expert_author_id'),
		array('expert.post_title', 'expert_title'),
		array('expert.post_excerpt', 'expert_excerpt'),
		array('expert.post_content', 'expert_content'),
		array('expert.post_date', 'expert_created'),
		array('expert.post_date_gmt', 'expert_created_gmt'),
		array('expert.post_modified', 'expert_modified'),
		array('expert.post_modified_gmt', 'expert_modified_gmt'),
		array('expert.post_name', 'expert_slug'),
		array('expert.comment_count', 'expert_comment_count'),
		array('media.ID', 'media_id'),
		array('media.guid', 'media_path'),
		array('user.ID', 'user_id'),
		array('user.display_name', 'user_display_name'),
		array('user.user_nicename', 'user_slug'),
		array('user.first_name', 'user_first_name'),
		array('user.middle_name', 'user_middle_name'),
		array('user.last_name', 'user_last_name'),
	);

	public function load_object(array $parameters)
	{
		// Filter experts on Category
		$parameters = array_merge($parameters, array(
			array('type', '=', 'expert')
		));

		$expert = parent::load_object($parameters);
		if ( ! empty($expert->id))
		{
			$expert->thumbnail_id = $this->_query_builder->select()->select('meta_value')
				->from('wp_postmeta')
				->where('post_id', '=', $expert->id)
				->and_where('meta_key', '=', '_thumbnail_id')
				->execute($this->_database)
				->get('meta_value');
		}

		return $expert;
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
		$select->from(array($this->_table_name, 'expert'));
		$select->join(array('wp_postmeta', 'expert_meta'), 'LEFT')->on('expert_meta.post_id', '=', 'expert.ID')->on('expert_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'expert_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'expert.post_author');
		$select->where('expert.post_type', '=', 'expert');

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
				'expert' => new Entity_Expert(Arr::filter_prefixed($result, 'expert_')),
				'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
			);
		}

		return $results;
	}

	public function load_set_by_category_id($category_ids, $limit = 10, $offset = 0)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_load_set_fields);
		$select->from(array($this->_table_name, 'expert'));
		$select->join(array('wp_postmeta', 'expert_meta'), 'LEFT')->on('expert_meta.post_id', '=', 'expert.ID')->on('expert_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'expert_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'expert.post_author');
		$select->where('expert.post_type', '=', 'expert');
		$select->where('expert.post_status', '=', 'publish');

		$select->where('expert.ID', 'IN', $this->_query_builder->select()
				->select('object_id')
				->from('wp_term_relationships')
				->where('term_taxonomy_id', 'IN', $category_ids)
		);

		$select->order_by('expert.post_date', 'DESC');
		$select->limit($limit);
		$select->offset($offset);

		$results = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$results[] = array(
				'expert' => new Entity_Expert(Arr::filter_prefixed($result, 'expert_')),
				'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
			);
		}

		return $results;
	}

	public function load_set_related($expert_id, $limit = 10)
	{
		$related_experts = $this->_query_builder->select()
			->select('related.object_id')
			->from(array('wp_term_relationships', 'expert'))
			->join(array('wp_term_relationships', 'related'), 'INNER')->on('expert.term_taxonomy_id', '=', 'related.term_taxonomy_id')
			->where('expert.object_id', '=', $expert_id)
			->where('related.object_id', '!=', $expert_id);

		$select = $this->_query_builder->select();
		$select->select_array($this->_load_set_fields);
		$select->from(array($this->_table_name, 'expert'));
		$select->join(array('wp_postmeta', 'expert_meta'), 'INNER')->on('expert_meta.post_id', '=', 'expert.ID')->on('expert_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'expert_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'expert.post_author');
		$select->where('expert.ID', 'IN', $related_experts);
		$select->and_where('expert.post_status', '=', 'publish');
		$select->and_where('expert.post_type', '=', 'expert');
		$select->limit($limit);

		$results = array();
		foreach ($select->execute($this->_database) as $expert)
		{
			$results[] = array(
				'expert' => new Entity_Expert(Arr::filter_prefixed($expert, 'expert_')),
				'user' => new Entity_User(Arr::filter_prefixed($expert, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($expert, 'media_')),
			);
		}

		return $results;
	}

	public function increase_view_count($entity)
	{
		$update = $this->_query_builder->update();
		$update->table($this->_table_name)
			->set(array('view_count' => DB::expr('view_count + 1')))
			->where('ID', '=', $entity->id)
			->execute($this->_database);
	}

	public function get_next($date)
	{
		$select = $this->_query_builder->select();
		$select->from($this->_table_name);
		$select->where('post_date', '>', $date);
		$select->order_by('post_date', 'ASC');
		$select->where('post_type', '=', 'expert');
		$select->where('post_status', '=', 'publish');
		$select->limit(1);

		return	$select->execute($this->_database)->current();
	}

	public function get_prev($date)
	{
		$select = $this->_query_builder->select();
		$select->from($this->_table_name);
		$select->where('post_date', '<', $date);
		$select->order_by('post_date', 'DESC');
		$select->where('post_type', '=', 'expert');
		$select->where('post_status', '=', 'publish');
		$select->limit(1);

		return	$select->execute($this->_database)->current();
	}
}