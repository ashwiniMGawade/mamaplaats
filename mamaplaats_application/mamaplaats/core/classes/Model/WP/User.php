<?php

defined('SYSPATH') or die('No direct script access.');

class Model_WP_User extends Model_WP {

	protected $_table_name = 'wp_users';
	protected $_data = array(
		'ID' => NULL,
		'user_login' => '',
		'user_pass' => '',
		'user_nicename' => '',
		'user_email' => '',
		'user_url' => '',
		'user_registered' => '',
		'user_activation_key' => '',
		'user_status' => 0,
		'display_name' => '',
		'spam' => '',
		'deleted' => '',
		'first_name' => '',
		'middle_name' => '',
		'last_name' => '',
		'birthdate' => '',
		'gender' => '',
		'pregnancy_due_date' => NULL,
		'author_type' => 'mother',
		'biography' => '',
		'tos' => 0,
		'newsletter' => 1,
		'registration_ip' => '',
	);

	protected $_rules = array(
		'user_login' => array(array('not_empty')),
		'user_pass' => array(array('not_empty')),
		'user_email' => array(array('not_empty'), array('email')),
		'user_url' => array(array('url')),
		'user_registered' => array(array('not_empty'), array('date')),
		'user_status' => array(array('not_empty'), array('digit')),
		'spam' => array(array('digit')),
		'deleted' => array(array('digit')),
		'first_name' => array(array('not_empty')),
		'last_name' => array(array('not_empty')),
		'birthdate' => array(array('not_empty'), array('date')),
		'gender' => array(array('not_empty'), array('digit')),
		'pregnancy_due_date' => array(array('date')),
		'author_type' => array(array('not_empty')),
		'tos' => array(array('agree')),
		'newsletter' => array(array('digit')),
	);

	/**
	 * @var Model_Wp_User_Child[]
	 */
	private $_children = array();

	public function __construct($id = NULL)
	{
		if (is_numeric($id))
		{
			parent::__construct($id);
		}
		else
		{
			parent::__construct();
		}

		if ($this->ID === NULL AND $id !== NULL AND !is_numeric($id))
		{
			$select = DB::select_array($this->fields())
					->where($this->_table_name . '.user_login', '=', $id)
					->or_where($this->_table_name . '.user_email', '=', $id);

			$this->load($select);
		}

		// Load the children
		if ($this->ID !== NULL)
		{
			$children = new Model_WP_User_Child;
			$this->_children = $children->load(DB::select()->where('wp_user_id', '=', $this->ID), NULL);
		}
	}

	public function find_user($search_parameter)
	{
		$query = DB::query(Database::SELECT, "
			SELECT *
			FROM ".$this->_table_name."
			WHERE display_name LIKE '%".$search_parameter."%'
			OR CONCAT(first_name,' ',middle_name,' ',last_name) LIKE '%".$search_parameter."%'
			OR CONCAT(first_name,' ',last_name) LIKE '%".$search_parameter."%'
			ORDER BY ID ASC
		")->execute()->as_array();
		return $query;
	}


	public function get_children()
	{
		return $this->_children;
	}

	public function get_mother($name, $exact = false)
	{
		$entry_filter = DB::select('ID', 'user_nicename', 'display_name');

		if ($exact)
		{
			$entry_filter->where('display_name', '=', "$name")
					->limit(1);

			return $this->load($entry_filter, 1);
		}
		else
		{
			$entry_filter->where('display_name', 'LIKE', "%$name%")
					->limit(10);

			return $this->load($entry_filter, NULL);
		}
	}

	public function get_most_active($start_date, $end_date)
	{
		$start_date = $this->_db->escape($start_date.' 00:00:00');
		$end_date 	= $this->_db->escape($end_date.' 23:59:59');

		$query = DB::query(Database::SELECT, "
			SELECT post_count.ID, post_count.user_nicename, post_count.display_name, post_count.biography, post_count.post_count, comment_count.comment_count
			FROM (
				SELECT wp_users.ID, user_nicename, display_name, biography, COUNT(wp_posts.ID) post_count
				FROM wp_users
				LEFT JOIN wp_posts ON (wp_users.ID = wp_posts.post_author)
				WHERE (post_date BETWEEN ".$start_date." AND ".$end_date.")
				AND post_type = 'post'
				GROUP BY wp_users.ID
			) AS post_count
			JOIN (
				SELECT user_id, COUNT(wp_comments.comment_ID) comment_count
				FROM wp_comments
				WHERE user_id != 0
				AND (comment_date BETWEEN ".$start_date." AND ".$end_date.")
				GROUP BY user_id
			) AS comment_count
			ON post_count.ID = comment_count.user_id
			ORDER BY post_count DESC, comment_count DESC
		");

		return $query->execute();
	}

	public function set_fields(array $data)
	{
		// Encode the password or else unset
		if ( ! empty($data['user_pass']))
		{
			// Use the auth function to hash the password
			$data['user_pass'] = Auth::instance()->hash($data['user_pass']);
		}
		elseif (isset($data['user_pass']))
		{
			unset($data['user_pass']);
		}

		parent::set_fields($data);
	}

	public function set_children(array $children)
	{
		$valid = TRUE;

		// Clear the children to prevent duplicates
		$this->_children = array();
		foreach ($children as $update_child)
		{
			$child = new Model_WP_User_Child($update_child['id']);
			$child->set_fields(array_merge($update_child, array('wp_user_id' => '1')));

			// Save the object
			$this->_children[] = $child;

			if ($child->is_valid() !== TRUE)
			{
				$valid = FALSE;
			}
		}

		// Throw an error if one child is not valid
		if ($valid !== TRUE)
		{
			throw new AutoModeler_Exception('not_all_child_info', array(), array('not_all_child_info' => 'Je hebt niet alle informatie ingevuld voor je kinderen'));
		}
	}

	public function save($validation = NULL)
	{
		$this->display_name = $this->user_login;
		$this->user_nicename = URL::title($this->display_name);

		// When new user
		$new_user = FALSE;
		if ($this->ID == NULL)
		{
			$new_user = TRUE;
			$this->user_registered = date('Y-m-d H:i:s');
		}

		// Check if the username and email are unique
		if ($this->_check_for_duplicate($this->ID, $this->user_login, $this->user_email))
		{
			throw new AutoModeler_Exception('duplicate_user', array(), array('duplicate_user' => 'Er bestaat al een gebruiker met hetzelfde email en/of gebruikersnaam'));
		}

		parent::save($validation);
		$this->_save_children();

		if ($new_user === TRUE)
		{
			$this->_add_wordpress_meta($this->ID);
		}
	}

	private function _save_children()
	{
		foreach ($this->_children as $child)
		{
			$child->wp_user_id = $this->ID;
			$child->save();
		}
	}

	private function _check_for_duplicate($id, $username, $email)
	{
		$users = DB::select('ID')->from($this->_table_name)->where('user_login', '=', $username)->or_where('user_email', '=', $email)->execute();
		foreach ($users as $user)
		{
			if ($user['ID'] != $id)
			{
				return TRUE;
			}
		}

		return FALSE;
	}

	private function _add_wordpress_meta($user_id)
	{
		// Editing Capabilities
		DB::insert('wp_usermeta', array('user_id', 'meta_key', 'meta_value'))->values(array($user_id, 'rich_editing', 'true'))->execute();
		DB::insert('wp_usermeta', array('user_id', 'meta_key', 'meta_value'))->values(array($user_id, 'comment_shortcuts', 'false'))->execute();
		DB::insert('wp_usermeta', array('user_id', 'meta_key', 'meta_value'))->values(array($user_id, 'show_admin_bar_front', 'false'))->execute();

		// Wordpress Capabilities
		DB::insert('wp_usermeta', array('user_id', 'meta_key', 'meta_value'))->values(array($user_id, 'wp_capabilities', 'a:1:{s:11:"contributor";b:1;}'))->execute();
		DB::insert('wp_usermeta', array('user_id', 'meta_key', 'meta_value'))->values(array($user_id, 'wp_user_level', '1'))->execute();
	}
}