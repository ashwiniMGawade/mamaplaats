<?php

class Storage_Database_Win extends Storage_Database_Translate implements Repository_Win
{
	protected $_table_name = 'wp_posts';
	protected $_entity_class = 'Entity_Win';

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
		'meta_description' 		=> 'meta_description',
		'post_date' 			=> 'created',
		'post_date_gmt' 		=> 'created_gmt',
		'post_modified' 		=> 'modified',
		'post_modified_gmt' 	=> 'modified_gmt',
	);

	protected $_load_set_fields = array(
		array('win.ID', 'win_id'),
		array('win.post_author', 'win_author_id'),
		array('win.post_title', 'win_title'),
		array('win.post_excerpt', 'win_excerpt'),
		array('win.post_content', 'win_content'),
		array('win.post_date', 'win_created'),
		array('win.post_date_gmt', 'win_created_gmt'),
		array('win.post_modified', 'win_modified'),
		array('win.post_modified_gmt', 'win_modified_gmt'),
		array('win.post_name', 'win_slug'),
		array('win.comment_count', 'win_comment_count'),
		array('win.meta_description', 'win_meta_description'),
		array('media.ID', 'media_id'),
		array('media.guid', 'media_path'),
		array('user.ID', 'user_id'),
		array('user.display_name', 'user_display_name'),
		array('user.user_nicename', 'user_slug'),
	);

	public function load_object(array $parameters)
	{
		// Filter Blogs on Category
		$parameters = array_merge($parameters, array(
			array('type', '=', 'win')
		));

		$win = parent::load_object($parameters);
		if ( ! empty($win->id))
		{
			$win->thumbnail_id = $this->_query_builder->select()->select('meta_value')
				->from('wp_postmeta')
				->where('post_id', '=', $win->id)
				->and_where('meta_key', '=', '_thumbnail_id')
				->execute($this->_database)
				->get('meta_value');

			$win = $this->_load_win_fields($win);
		}

		return $win;
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
		$select->from(array($this->_table_name, 'win'));
		$select->join(array('wp_postmeta', 'win_meta'), 'LEFT')->on('win_meta.post_id', '=', 'win.ID')->on('win_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'win_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'win.post_author');
		$select->where('win.post_type', '=', 'win');

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
				'win' => new Entity_Win(Arr::filter_prefixed($result, 'win_')),
				'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
			);
		}

		return $results;
	}

	public function load_set_by_category_id($category_id, $limit = 10, $offset = 0, $post_ids_in = array(), $post_ids_not_in = array())
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_load_set_fields);
		$select->from(array($this->_table_name, 'win'));
		$select->join(array('wp_postmeta', 'win_meta'), 'LEFT')->on('win_meta.post_id', '=', 'win.ID')->on('win_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'win_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'win.post_author');
		$select->where('win.post_type', '=', 'win');
		$select->where('win.post_status', '=', 'publish');

		// Filter Blogs on Category
		$select->where('win.ID', 'IN', $this->_query_builder->select()
			->select('object_id')
			->from('wp_term_relationships')
			->where('term_taxonomy_id', '=', $category_id)
		);


        //get only selective posts
        if (!empty($post_ids_in)) {
            $select->where('win.ID','IN', $post_ids_in);
        }

        //dont get only selective posts
        if (!empty($post_ids_not_in)) {
            $select->where('win.ID','NOT IN', $post_ids_not_in);
        }

		$select->order_by('win.post_date', 'DESC');
		$select->limit($limit);
		$select->offset($offset);
		$results = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$win = new Entity_Win(Arr::filter_prefixed($result, 'win_'));
			$win = $this->_load_win_fields($win);

			$results[] = array(
				'win' 	=> $win,
				'user' 	=> new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
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

	private function _load_win_fields($win)
	{
		$meta = $this->_load_meta($win->id);

		$win->end_date = ( ! empty($meta['end_date'])) ? $meta['end_date'] : '';

		if ( ! empty($meta['winners']))
		{
			$win->winners = $this->_load_winners(explode(',', $meta['winners']));
		}

		return $win;
	}

	private function _load_meta($win_id)
	{
		$select = $this->_query_builder->select();
		return $select->from('wp_postmeta')->where('post_id', '=', $win_id)->execute($this->_database)->as_array('meta_key', 'meta_value');
	}

	private function _load_winners(array $winner_ids)
	{
		$user_fields = array(
			array('user.ID', 'id'),
			array('user.first_name', 'first_name'),
			array('user.middle_name', 'middle_name'),
			array('user.last_name', 'last_name'),
			array('user.display_name', 'display_name'),
			array('user.user_nicename', 'slug'),
			array('user.profile_image_ext', 'profile_image_ext')
		);

		$select = $this->_query_builder->select();
		return $select->select_array($user_fields)
			->from(array('wp_users', 'user'))
			->where('ID', 'IN', $winner_ids)
			->as_object('Entity_User')
			->execute($this->_database);
	}
}