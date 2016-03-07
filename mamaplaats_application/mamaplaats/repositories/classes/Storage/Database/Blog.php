<?php

class Storage_Database_Blog extends Storage_Database_Translate implements Repository_Blog
{
	protected $_table_name = 'wp_posts';
	protected $_entity_class = 'Entity_Blog';

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
		array('blog.ID', 'blog_id'),
		array('blog.post_author', 'blog_author_id'),
		array('blog.post_title', 'blog_title'),
		array('blog.post_excerpt', 'blog_excerpt'),
		array('blog.post_content', 'blog_content'),
		array('blog.post_date', 'blog_created'),
		array('blog.post_date_gmt', 'blog_created_gmt'),
		array('blog.post_modified', 'blog_modified'),
		array('blog.post_modified_gmt', 'blog_modified_gmt'),
		array('blog.post_name', 'blog_slug'),
		array('blog.comment_count', 'blog_comment_count'),
		array('blog.meta_description', 'blog_meta_description'),
		array('media.ID', 'media_id'),
		array('media.guid', 'media_path'),
		array('user.ID', 'user_id'),
		array('user.display_name', 'user_display_name'),
		array('user.user_email', 'user_email'),
		array('user.user_nicename', 'user_slug'),
		array('user.first_name', 'user_first_name'),
		array('user.middle_name', 'user_middle_name'),
		array('user.last_name', 'user_last_name'),
	);

	public function load_object(array $parameters)
	{
		// Filter Blog on Category
		$parameters = array_merge($parameters, array(
			array('type', '=', 'post')
		));

		$blog = parent::load_object($parameters);
		if ( ! empty($blog->id))
		{
			$blog->thumbnail_id = $this->_query_builder->select()->select('meta_value')
				->from('wp_postmeta')
				->where('post_id', '=', $blog->id)
				->and_where('meta_key', '=', '_thumbnail_id')
				->execute($this->_database)
				->get('meta_value');

			$blog->categories = $this->_query_builder->select()->select('term_taxonomy_id')
				->from('wp_term_relationships')
				->where('object_id', '=', $blog->id)
				->execute($this->_database)
				->as_array('term_taxonomy_id', 'term_taxonomy_id');
		}

		return $blog;
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
		$select->from(array($this->_table_name, 'blog'));
		$select->join(array('wp_postmeta', 'blog_meta'), 'LEFT')->on('blog_meta.post_id', '=', 'blog.ID')->on('blog_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'blog_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'blog.post_author');
		$select->where('blog.post_type', '=', 'post');

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
				'blog' => new Entity_Blog(Arr::filter_prefixed($result, 'blog_')),
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
		$select->from(array($this->_table_name, 'blog'));
		$select->join(array('wp_postmeta', 'blog_meta'), 'LEFT')->on('blog_meta.post_id', '=', 'blog.ID')->on('blog_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'blog_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'blog.post_author');
		$select->where('blog.post_type', '=', 'post');
		$select->where('blog.post_status', '=', 'publish');

		// Filter Blogs on Category
		$select->where('blog.ID', 'IN', $this->_query_builder->select()
			->select('object_id')
			->from('wp_term_relationships')
			->where('term_taxonomy_id', 'IN', $category_ids)
		);

		$select->order_by('blog.post_date', 'DESC');
		$select->limit($limit);
		$select->offset($offset);

		$results = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$results[] = array(
				'blog' => new Entity_Blog(Arr::filter_prefixed($result, 'blog_')),
				'user' => new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($result, 'media_')),
			);
		}

		return $results;
	}

	public function load_set_related($blog_id, $limit = 10)
	{
		$related_blogs = $this->_query_builder->select()
			->select('related.object_id')
			->from(array('wp_term_relationships', 'blog'))
			->join(array('wp_term_relationships', 'related'), 'INNER')->on('blog.term_taxonomy_id', '=', 'related.term_taxonomy_id')
			->where('blog.object_id', '=', $blog_id)
			->where('related.object_id', '!=', $blog_id);

		$select = $this->_query_builder->select();
		$select->select_array($this->_load_set_fields);
		$select->from(array($this->_table_name, 'blog'));
		$select->join(array('wp_postmeta', 'blog_meta'), 'INNER')->on('blog_meta.post_id', '=', 'blog.ID')->on('blog_meta.meta_key', '=', DB::expr("'_thumbnail_id'"));
		$select->join(array('wp_posts', 'media'), 'LEFT')->on('media.ID', '=', 'blog_meta.meta_value')->on('media.post_type', '=', DB::expr("'attachment'"));
		$select->join(array('wp_users', 'user'), 'INNER')->on('user.ID', '=', 'blog.post_author');
		$select->where('blog.ID', 'IN', $related_blogs);
		$select->and_where('blog.post_status', '=', 'publish');
		$select->and_where('blog.post_type', '=', 'post');
		$select->order_by('blog.post_date', 'DESC');
		$select->limit($limit);

		$results = array();
		foreach ($select->execute($this->_database) as $blog)
		{
			$results[] = array(
				'blog' => new Entity_Blog(Arr::filter_prefixed($blog, 'blog_')),
				'user' => new Entity_User(Arr::filter_prefixed($blog, 'user_')),
				'media' => new Entity_Media(Arr::filter_prefixed($blog, 'media_')),
			);
		}

		return $results;
	}

	// @todo replace this method to use load set advanced
	public function load_latest_with_limit($author_id = 1, $limit = 15, $offset = 0)
	{
		$query = DB::query(Database::SELECT, "
			SELECT
			blog.ID as id,
			blog.post_title as title,
			blog.post_excerpt as excerpt,
			blog.post_name  as slug,
			blog.post_date 	as created
			FROM ".$this->_table_name." as blog
			WHERE post_author = '".$author_id."'
			AND post_status = 'publish'
			ORDER BY post_date DESC
			LIMIT ".$limit."
			OFFSET ".$offset."
		");

		$blog_list = array();
		foreach ($query->execute() as $result)
		{
			$blog_list[] = new $this->_entity_class($result);
		}

		return $blog_list;
	}

	public function create($entity)
	{
		$entity = parent::create($entity);
		$this->_save_thumnail_id($entity);

		return $entity;
	}

	public function update($entity)
	{
		$entity = parent::update($entity);
		$this->_save_thumnail_id($entity);

		return $entity;
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
		$select->where('post_type', '=', 'post');
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
		$select->where('post_type', '=', 'post');
		$select->where('post_status', '=', 'publish');
		$select->limit(1);

		return	$select->execute($this->_database)->current();
	}

	private function _save_thumnail_id($entity)
	{
		if ( ! empty($entity->thumbnail_id))
		{
			$delete = $this->_query_builder->delete();
			$insert = $this->_query_builder->insert();

			$delete->table('wp_postmeta')
				->where('post_id', '=', $entity->id)
				->and_where('meta_key', '=', '_thumbnail_id')
				->execute($this->_database);

			$insert->table('wp_postmeta')
				->columns(array('post_id', 'meta_key', 'meta_value'))
				->values(array($entity->id, '_thumbnail_id', $entity->thumbnail_id))
				->execute($this->_database);
		}
	}
}