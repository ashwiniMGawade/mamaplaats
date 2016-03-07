<?php

class Storage_Database_Advise extends Storage_Database_Translate implements Repository_Advise
{
	protected $_table_name = 'wp_posts';
	protected $_entity_class = 'Entity_Advise';

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
		array('advise.ID', 'advise_id'),
		array('advise.post_author', 'advise_author_id'),
		array('advise.post_title', 'advise_title'),
		array('advise.post_excerpt', 'advise_excerpt'),
		array('advise.post_content', 'advise_content'),
		array('advise.post_date', 'advise_created'),
		array('advise.post_date_gmt', 'advise_created_gmt'),
		array('advise.post_modified', 'advise_modified'),
		array('advise.post_modified_gmt', 'advise_modified_gmt'),
		array('advise.post_name', 'advise_slug'),
		array('advise.comment_count', 'advise_comment_count'),
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
		// Filter advises on Category
		$parameters = array_merge($parameters, array(
			array('type', '=', 'advise')
		));

		$advise = parent::load_object($parameters);
		if ( ! empty($advise->id))
		{
			$advise->thumbnail_id = $this->_query_builder->select()->select('meta_value')
				->from('wp_postmeta')
				->where('post_id', '=', $advise->id)
				->and_where('meta_key', '=', '_thumbnail_id')
				->execute($this->_database)
				->get('meta_value');

			$advise->categories = $this->_query_builder->select()->select('term_taxonomy_id')
				->from('wp_term_relationships')
				->where('object_id', '=', $advise->id)
				->execute($this->_database)
				->as_array('term_taxonomy_id', 'term_taxonomy_id');
		}

		return $advise;
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
		$select->from(array($this->_table_name, 'advise'));
		$select->join(array('wp_postmeta', 'advise_meta'), 'LEFT')->on('advise_meta.post_id', '=', 'advise.ID')->on('advise_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'advise_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'advise.post_author');
		$select->where('advise.post_type', '=', 'advise');

        foreach ($parameters as $key=>$parameter) {
            $parameters[$key][2] = addslashes($parameter[2]);
        }
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
				'advise' => new Entity_Advise(Arr::filter_prefixed($result, 'advise_')),
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
		$select->from(array($this->_table_name, 'advise'));
		$select->join(array('wp_postmeta', 'advise_meta'), 'LEFT')->on('advise_meta.post_id', '=', 'advise.ID')->on('advise_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'advise_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'advise.post_author');
		$select->where('advise.post_type', '=', 'advise');
		$select->where('advise.post_status', '=', 'publish');

		$select->where('advise.ID', 'IN', $this->_query_builder->select()
				->select('object_id')
				->from('wp_term_relationships')
				->where('term_taxonomy_id', 'IN', $category_ids)
		);

		$select->order_by('advise.post_date', 'DESC');
		$select->limit($limit);
		$select->offset($offset);

		$results = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$results[] = array(
				'advise' => new Entity_Advise(Arr::filter_prefixed($result, 'advise_')),
				'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
			);
		}

		return $results;
	}

    public function load_advies_by_category_id($parameters, $category_ids, $limit = 10, $offset = 0)
    {
        $select = $this->_query_builder->select();
        $select->select_array($this->_load_set_fields);
        $select->from(array($this->_table_name, 'advise'));
        $select->join(array('wp_postmeta', 'advise_meta'), 'LEFT')->on('advise_meta.post_id', '=', 'advise.ID')->on('advise_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
        $select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'advise_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
        $select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'advise.post_author');
        $select->where('advise.post_type', '=', 'advise');
        $select->where('advise.post_status', '=', 'publish');

        $select->where('advise.ID', 'IN', $this->_query_builder->select()
                ->select('object_id')
                ->from('wp_term_relationships')
                ->where('term_taxonomy_id', 'IN ', $category_ids)
        );

        foreach ($parameters as $key=>$parameter) {
            $parameters[$key][2] = addslashes($parameter[2]);
        }

        $this->where($select, $parameters);

        $select->order_by('advise.post_date', 'DESC');
        $select->limit($limit);
        $select->offset($offset);

        $results = array();
        foreach ($select->execute($this->_database) as $result)
        {
            $results[] = array(
                'advise' => new Entity_Advise(Arr::filter_prefixed($result, 'advise_')),
                'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
                'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
            );
        }

        return $results;
    }


    public function load_set_related($advise_id, $limit = 10)
	{
		$related_advises = $this->_query_builder->select()
			->select('related.object_id')
			->from(array('wp_term_relationships', 'advise'))
			->join(array('wp_term_relationships', 'related'), 'INNER')->on('advise.term_taxonomy_id', '=', 'related.term_taxonomy_id')
			->where('advise.object_id', '=', $advise_id)
			->where('related.object_id', '!=', $advise_id);

		$select = $this->_query_builder->select();
		$select->select_array($this->_load_set_fields);
		$select->from(array($this->_table_name, 'advise'));
		$select->join(array('wp_postmeta', 'advise_meta'), 'INNER')->on('advise_meta.post_id', '=', 'advise.ID')->on('advise_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'advise_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'advise.post_author');
		$select->where('advise.ID', 'IN', $related_advises);
		$select->and_where('advise.post_status', '=', 'publish');
		$select->and_where('advise.post_type', '=', 'advise');
		$select->order_by('advise.post_date', 'DESC');
		$select->limit($limit);

		$results = array();
		foreach ($select->execute($this->_database) as $advise)
		{
			$results[] = array(
				'advise' => new Entity_Advise(Arr::filter_prefixed($advise, 'advise_')),
				'user' => new Entity_User(Arr::filter_prefixed($advise, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($advise, 'media_')),
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
		$select->where('post_type', '=', 'advise');
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
		$select->where('post_type', '=', 'advise');
		$select->where('post_status', '=', 'publish');
		$select->limit(1);

		return	$select->execute($this->_database)->current();
	}
}