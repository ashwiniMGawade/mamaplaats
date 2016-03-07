<?php defined('SYSPATH') or die('No direct script access.');

class Model_WP_Comment extends Model_WP
{
	protected $_table_name  = 'wp_comments';

	protected $_data = array(
		'comment_ID'			=> NULL,
		'comment_post_ID' 		=> 0,
		'comment_author' 		=> '',
		'comment_author_email' 	=> '',
		'comment_author_url' 	=> '',
		'comment_author_IP' 	=> '',
		'comment_date'			=> '',
		'comment_date_gmt' 		=> '',
		'comment_content' 		=> '',
		'comment_karma' 		=> '',
		'comment_approved' 		=> '',
		'comment_agent' 		=> '',
		'comment_type'			=> '',
		'comment_parent' 		=> '',
		'user_id'				=> NULL,
	);

	protected $_rules = array(
		'comment_post_ID' => array(
			array('digit'),
		),
	);

	public function __construct($id = NULL)
	{
		parent::__construct();

		if ($id !== NULL AND $id !== 0)
		{
			$this->load(DB::select_array($this->fields())->where($this->_table_name.'.comment_ID', '=', $id));
		}
		elseif ($this->comment_ID) // We loaded this via mysql_result_object
		{
			$this->_state = AutoModeler::STATE_LOADED;
		}
	}

	public function process_load_state()
	{
		if ($this->comment_ID)
		{
			$this->_state = AutoModeler::STATE_LOADED;
		}
		else
		{
			$this->_state = AutoModeler::STATE_NEW;
		}
	}

	public function get_comment_count($author_id)
	{
		$query = DB::select(array(DB::expr('COUNT(*)'), 'count'))
				->where('comment_approved', '=', 1)
				->and_where('user_id', '=', $author_id);

		return $this->load($query, 1);
	}

	/**
	 * get_all_user_comments gets all comments
	 *
	 * @return array
	 */
	public function get_all_user_comments()
	{
		return $this->_db->query(Database::SELECT, "
			SELECT comment_ID, user_id
			FROM wp_comments
			WHERE user_id != 0
			AND comment_approved = 1;
		")->as_array();
	}

	public function get_all_popular_comments_between_dates($start_date, $end_date)
	{
		$start_date = $this->_db->escape($start_date.' 00:00:00');
		$end_date = $this->_db->escape($end_date.' 23:59:59');

		return $this->_db->query(Database::SELECT, "
			SELECT COUNT(comment_count.comment_ID) AS count, comment_count.comment_parent, wp_comments.comment_author,
			wp_comments.comment_date_gmt, wp_comments.comment_content, wp_posts.post_title, wp_posts.guid
			FROM wp_comments comment_count
			LEFT JOIN wp_comments ON comment_count.comment_parent = wp_comments.comment_ID
			LEFT JOIN wp_posts ON wp_comments.comment_post_ID = wp_posts.ID
			WHERE (comment_count.comment_date BETWEEN ".$start_date." AND ".$end_date.")
			AND comment_count.comment_parent != 0
			AND comment_count.comment_approved = 1
			AND comment_count.comment_type != 'spam'
			GROUP BY comment_count.comment_parent
			ORDER BY count DESC
		");
	}
}