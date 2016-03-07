<?php

class Storage_Database_Comment extends Storage_Database_Translate implements Repository_Comment {
	protected $_table_name = 'wp_comments';
	protected $_entity_class = 'Entity_Comment';

	protected $_field_translate = array(
		'comment_ID' 			=> 'id',
		'comment_post_ID' 		=> 'post_id',
		'comment_author' 		=> 'author_name',
		'comment_author_email' 	=> 'author_email',
		'comment_author_url' 	=> 'author_url',
		'comment_author_IP' 	=> 'author_ip',
		'comment_date' 			=> 'date',
		'comment_date_gmt' 		=> 'date_gmt',
		'comment_content' 		=> 'content',
		'comment_karma' 		=> 'karma',
		'comment_approved' 		=> 'approved',
		'comment_agent' 		=> 'agent',
		'comment_type' 			=> 'type',
		'comment_parent' 		=> 'parent_id',
		'user_id' 				=> 'user_id'
	);

	public function create($entity)
	{
		$comment = parent::create($entity);

		// Increase comment count if approved
		if ($comment->approved == 1)
		{
			$update = $this->_query_builder->update();
			$update->table('wp_posts')
				->set(array('comment_count' => DB::expr('comment_count + 1')))
				->where('ID', '=', $comment->post_id)
				->execute($this->_database);
		}

		return $comment;
	}

	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL)
	{
		$fields = array_merge($this->_get_select_fields(), array(
			array('users.ID', 'author_id'),
			array('users.user_nicename', 'author_slug'),
			array('blogs.post_name', 'blog_slug'),
			array('blogs.post_author', 'blog_author'),
			array('users.profile_image_ext', 'profile_image_ext'),
		));

		$select = $this->_query_builder->select();
		$select->select_array($fields);
		$select->from($this->_table_name);
		$select->join(array('wp_users', 'users'), 'LEFT')->on('users.ID', '=', $this->_table_name.'.user_id');
		$select->join(array('wp_posts', 'blogs'), 'LEFT')->on('blogs.ID', '=', $this->_table_name.'.comment_post_ID');
		$select->as_object($this->_entity_class);

		$parameters = $this->_translate_paramenters($parameters);
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
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

    public function load_Comments(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL)
    {
        $select = $this->_query_builder->select();

        $select->from($this->_table_name);
        $select->as_object($this->_entity_class);

        $this->where($select, $parameters);

        if (!empty($order_by))
        {
            $select->order_by($order_by, $direction);
        }

        if (!empty($limit))
        {
            $select->limit($limit);
        }

        if (!empty($offset)){
            $select->offset($offset);
        }

        $results = [];
        foreach ($select->execute($this->_database) as $entity)
        {
            $results[] = $entity;
        }

        return $results;
    }
}