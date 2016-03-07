<?php

class Storage_Database_User extends Storage_Database_Translate implements Repository_User {

	protected $_table_name = 'wp_users';
	protected $_entity_class = 'Entity_User';

	protected $_field_translate = array(
		'ID' 					=> 'id',
		'user_nicename' 		=> 'slug',
		'display_name' 			=> 'display_name',
		'user_login' 			=> 'username',
		'user_pass'				=> 'password',
		'user_email' 			=> 'email',
		'user_url' 				=> 'url',
		'user_activation_key' 	=> 'activation_key',
		'user_status' 			=> 'status',
		'spam' 					=> 'spam',
		'deleted' 				=> 'deleted',
		'first_name' 			=> 'first_name',
		'middle_name' 			=> 'middle_name',
		'last_name' 			=> 'last_name',
		'birthdate' 			=> 'birthdate',
		'gender' 				=> 'gender',
		'pregnancy_due_date' 	=> 'pregnancy_due_date',
		'author_type' 			=> 'author_type',
		'biography' 			=> 'biography',
		'tos'					=> 'tos',
		'newsletter'			=> 'newsletter',
		'registration_ip'		=> 'registration_ip',
		'user_registered'		=> 'registration_date',
		'comment_notification'	=> 'comment_notification',
		'profile_image_ext'		=> 'profile_image_ext',
		'login_count'           => 'login_count',
		'phone_number'          => 'phone_number'
	);

	public function load_object(array $parameters)
	{
		$user = parent::load_object($parameters);

		if ( ! empty($user))
		{
			$user->children = $this->_fetch_children($user);
		}

		return $user;
	}

	public function load_user_info($parameters)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_get_select_fields());
		$select->from($this->_table_name);
		$select->as_object($this->_entity_class);
		$select->and_where_open()
			->where('user_nicename', '=', $parameters)
			->or_where('display_name', '=', $parameters)
			->and_where_close();

		$user	= $select->execute($this->_database)->current();

		if ( ! empty($user))
		{
			$user->children = $this->_fetch_children($user);
		}

		return $user;
	}

	public function create($entity)
	{
		$user = parent::create($entity);
		$this->_update_children($user);

		return $user;
	}

	public function update($entity)
	{
		$user = parent::update($entity);
		$this->_update_children($user);

		return $user;
	}

	public function load_user_statistics($user_id)
	{
		$user_id = $this->_database->escape($user_id);
		$query = $this->_database->query(Database::SELECT, "
			SELECT
			(SELECT count(*) FROM followers WHERE following_id = wp_users.id) AS follower_count,
			(SELECT count(*) FROM wp_comments WHERE user_id = wp_users.id) AS comment_count,
			(SELECT count(*) FROM wp_posts WHERE wp_posts.post_author = wp_users.id AND wp_posts.post_status = 'publish')  AS blog_count
			FROM wp_users
			WHERE wp_users.ID = ".$user_id."
			GROUP BY wp_users.ID
		");

		return $query->current();
	}

	public function get_author_list($first_letter)
	{
		$first_letter = $this->_database->escape($first_letter.'%');
		$query = $this->_database->query(Database::SELECT, "
			SELECT ID AS id,
			first_name,
			middle_name,
			last_name,
			display_name,
			user_nicename AS slug,
			author_type AS author_type,
			biography AS biography,
			profile_image_ext,
			(SELECT count(*) FROM followers WHERE following_id = wp_users.id) AS follower_count,
			(SELECT count(*) FROM wp_comments WHERE user_id = wp_users.id) AS comment_count,
			(SELECT count(*) FROM wp_posts WHERE wp_posts.post_author = wp_users.id AND wp_posts.post_status = 'publish')  AS blog_count
			FROM wp_users
			WHERE (
				display_name LIKE ".$first_letter." OR
				(display_name = '' AND first_name LIKE ".$first_letter.")
			)
			AND biography != ''
			GROUP BY id
			HAVING blog_count >= 1
		");

		$author_list = array();
		foreach ($query as $result)
		{
			$author = new Entity_User($result);
			$author->comment_count = $result['comment_count'];
			$author->follower_count = $result['follower_count'];
			$author->blog_count = $result['blog_count'];
			$author_list[$author->id] = $author;
		}

		return $author_list;
	}

	public function get_by_search_term($search_terms, $limit = NULL, $offset = NULL)
	{
		$select = $this->_query_builder->select();
		$select->from(array($this->_table_name, 'user'));
		$select->select_array(array(
			'user.*',
			array('ID', 'id'),
			array('user_nicename', 'slug'),
			array('user_email', 'email'),
		));

		$select->where('user.display_name', 'like', '%'.$search_terms.'%');
		$select->or_where(DB::expr("concat_ws('',first_name,middle_name,last_name)"), 'like', '%'.str_replace(' ', '', $search_terms).'%');

		if ($limit !== NULL AND $offset !== NULL)
		{
			$select->limit($limit);
			$select->offset($offset);
		}
		$select->group_by('id');

		$user_list = array();
		foreach ($select->execute() as $result)
		{
			$user_list[] = new Entity_User($result);
		}

		return $user_list;
	}

	public function load_set_latest_active($limit = 15)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_get_select_fields());
		$select->from($this->_table_name);
		$select->join('wp_posts', 'INNER')->on('wp_posts.post_author', '=', 'wp_users.ID');
		$select->where('wp_posts.post_status', '=', 'publish');
		$select->where('wp_posts.post_type', '=', 'post');
		$select->where('wp_posts.post_date', '>=', date('Y-m-d H:i:s', strtotime('-2 weeks')));
		$select->group_by('wp_posts.post_author');
		$select->order_by('wp_posts.post_date', 'DESC');
		$select->limit($limit);
		$select->as_object($this->_entity_class);

		$results = array();
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	private function _fetch_children(Entity_User $user)
	{
		$select = $this->_query_builder->select();
		return $select->from('wp_user_children')->where('user_id', '=', $user->id)->execute($this->_database)->as_array();
	}

	private function _update_children(Entity_User $user)
	{
		$child_ids = array();
		foreach ($user->children as $child)
		{
			$child_ids[] = $child['id'];
			$child['user_id'] = $user->id;

			if (empty($child['id']))
			{
				$insert = $this->_query_builder->insert();
				$insert->table('wp_user_children')->columns(array_keys($child))->values($child);

				$child_ids[] = $insert->execute($this->_database)[0];
			}
			else
			{
				$update = $this->_query_builder->update();
				$update->table('wp_user_children')->set($child)->where('id', '=', $child['id'])->execute($this->_database);
			}
		}

		$delete = $this->_query_builder->delete();
		$delete->table('wp_user_children')->where('user_id', '=', $user->id);

		if ( ! empty($child_ids))
		{
			$delete->and_where('id', 'NOT IN', $child_ids);
		}

		$delete->execute($this->_database);
	}

	public function count_users_to_update_image_extension()
	{
		$query = $this->_database->query(Database::SELECT, "
			SELECT
			count(*) AS total_users
			FROM wp_users
			WHERE profile_image_ext IS NULL
			OR profile_image_ext IN ('','png')"
		);

		return $query->current();
	}

	public function get_users_to_update_image_extension($limit = NULL, $offset = NULL)
	{
		$select = $this->_query_builder->select();
		$select->from(array($this->_table_name, 'user'));
		$select->select_array(array('user.id', 'user.profile_image_ext'));
		$select->where('user.profile_image_ext', '=', NULL);
		$select->or_where('user.profile_image_ext', '=', '');
		$select->or_where('user.profile_image_ext', '=', 'png');
		if ($limit !== NULL AND $offset !== NULL)
		{
			$select->limit($limit);
			$select->offset($offset);
		}
		$select->order_by('user.id', 'DESC');

		$user_list = array();
		foreach ($select->execute() as $result)
		{
			$user_list[] = $result;
		}

		return $user_list;
	}
}