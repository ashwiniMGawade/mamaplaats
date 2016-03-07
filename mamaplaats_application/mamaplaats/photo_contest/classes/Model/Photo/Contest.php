<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The Photo Contest Model that contact the database
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $example_photo
 * @property $sponsor_photo
 * @property $sponsor_title
 * @property $sponsor_page
 * @property $rewards
 * @property $terms
 * @property $active
 * @property $submit_date
 * @property $start_date
 * @property $end_date
 */
class Model_Photo_Contest extends AutoModeler_ORM
{
	protected $_table_name  = 'photo_contests';

	protected $_data = array(
		'id' 							=> NULL,
		'title' 						=> '',
		'description' 					=> '',
		'example_photo' 				=> '',
		'sponsor_photo' 				=> '',
		'sponsor_title' 				=> '',
		'sponsor_short' 				=> '',
		'sponsor_page' 					=> '',
		'terms' 						=> '',
		'submit_date' 					=> '',
		'start_date' 					=> '',
		'end_date' 						=> '',
		'page_body'						=> '',
		'banner_code' 					=> '',
		'mail_upload_footer_content' 	=> '',
		'mail_vote_footer_content' 		=> '',
	);

	protected $_rules = array(
		'id'							=> array(array('digit')),
		'title'							=> array(array('not_empty')),
		'description'					=> array(array('not_empty')),
		'sponsor_title'					=> array(array('not_empty')),
		'sponsor_short'					=> array(array('not_empty')),
		'sponsor_page'					=> array(array('not_empty')),
		'terms'							=> array(array('not_empty')),
		'submit_date'					=> array(array('not_empty')),
		'start_date'					=> array(array('not_empty')),
		'end_date'						=> array(array('not_empty')),
	);

	/**
	 * @var array An array that can be filled with reward objects
	 */
	public $rewards = array();

	/**
	 * This is a complex photo contest parser that combines the rewards
	 * with the photo contests in a single loop and fills the models
	 * with the correct data.
	 *
	 * @return Model_Photo_Contest[] A array with all photo contests
	 */
	public function get_past()
	{
		// Load the model because I need the fields
		$reward = new Model_Photo_Contest_Reward;

		// User needs to generate the fields for lazy loading
		$fields = '';
		foreach ($reward->fields() as $field)
		{
			$fields .= $field." AS '".str_replace('.', ':', $field)."',";
		}

		// Get the entries and connect the user
		$contests = DB::query(Database::SELECT, "
			SELECT photo_contests.*, ".$fields." photo_contests.id as extra_field
			FROM photo_contests
			LEFT JOIN photo_contest_rewards
			ON photo_contests.id = photo_contest_rewards.photo_contest_id
			WHERE photo_contests.end_date < :end_date
			ORDER BY photo_contests.end_date DESC
		")
		->parameters(array(
			':end_date' => date('Y-m-d'),
		))->execute();

		$contest_array = array();
		foreach ($contests as $contest)
		{
			if ( ! isset($contest_id) OR $contest_id != $contest['id'])
			{
				if (isset($contest_id) AND $contest_id != $contest['id'])
				{
					$contest_array[] = $contest_model;
				}

				$contest_model = new Model_Photo_Contest;
				$contest_model->set_fields($contest);
			}

			$reward_model = new Model_Photo_Contest_Reward;
			$reward_model->set_fields(array(
				'id' 				=> $contest['photo_contest_rewards:id'],
				'photo_contest_id' 	=> $contest['photo_contest_rewards:photo_contest_id'],
				'title' 			=> $contest['photo_contest_rewards:title'],
				'menu_title' 		=> $contest['photo_contest_rewards:menu_title'],
				'description' 		=> $contest['photo_contest_rewards:description'],
				'photo_url' 		=> $contest['photo_contest_rewards:photo_url'],
				'winner' 			=> $contest['photo_contest_rewards:winner'],
			));

			$contest_model->rewards[] = $reward_model;
			$contest_id = $contest['id'];
		}
		$contest_array[] = $contest_model;

		return $contest_array;
	}

	/**
	 * Return the currently active photo contest
	 *
	 * @return Model_Photo_Contest The photo contest object
	 */
	public function get_active()
	{
		// Only get the active contest
		$entry_filter = DB::select()
			->where('start_date', '<=', date('Y-m-d'))
			->and_where('end_date', '>=', date('Y-m-d'));

		return $this->load($entry_filter, 1);
	}

	/**
	 * Return the next active photo contest
	 *
	 * @return Model_Photo_Contest The photo contest object
	 */
	public function get_next()
	{
		// Only get the active contest
		$entry_filter = DB::select()
			->where('submit_date', '<=', date('Y-m-d'))
			->and_where('start_date', '>', date('Y-m-d'))
			->order_by('start_date', 'ASC');

		return $this->load($entry_filter, 1);
	}

	/**
	 * Get the entries that belong to this photo contest
	 *
	 * @param int $amount The amount of entries per page
	 * @param string $order_by The field to order the entries by
	 * @param int $page The page to get
	 * @return Model_Photo_Contest_Entry[] The entry objects found
	 */
	public function get_entries($amount = 9, $order_by = 'last_vote', $page = 1)
	{
		$offset = ($page - 1) * $amount;

		// Load the model because I need the fields
		$user = new Model_WP_User;

		// User needs to generate the fields for lazy loading
		$fields = '';
		foreach ($user->fields() as $field)
		{
			$fields .= $field." AS '".str_replace('.', ':', $field)."',";
		}

		// Get the entries and connect the user
		return DB::query(Database::SELECT, "
			SELECT ent2.*, ".$fields."
			(
				SELECT COUNT(id)+1
				FROM photo_contest_entries ent1
				WHERE ent1.photo_contest_id = ent2.photo_contest_id
				AND ent1.amount_votes > ent2.amount_votes
				AND ent1.status = 'accepted'
			) AS rank
			FROM photo_contest_entries ent2
			LEFT JOIN wp_users
			ON ent2.wp_user_id = wp_users.ID
			WHERE ent2.photo_contest_id = :contest
			AND ent2.status = 'accepted'
			ORDER BY ent2.".$order_by." DESC
			LIMIT ".(int) $amount."
			OFFSET ".(int) $offset."
		")
		->parameters(array(
			':contest' 	=> $this->id,
			':limit' 	=> $amount,
			':offset' 	=> $offset,
		))
		->as_object('Model_Photo_Contest_Entry')
		->execute($this->_db);
	}

	/**
	 * Return the rewards that belong to this contest
	 *
	 * @return Model_Photo_Contest_Reward[] The reward objects
	 */
	public function get_rewards()
	{
		$reward = new Model_Photo_Contest_Reward;
		$filter = DB::select()
			->where('photo_contest_id', '=', $this->id);

		return $reward->load($filter, NULL);
	}

	/**
	 * Return the votes that belong to this contest
	 *
	 * @return Model_Photo_Contest_Vote[] The ip objects found
	 */
	public function get_votes()
	{
		$vote = new Model_Photo_Contest_Vote;

		return DB::select_array($vote->fields())
			->from($vote->get_table_name())
			->join('photo_contest_entries', 'LEFT')
			->on('photo_contest_entries.id', '=', 'photo_contest_votes.photo_contest_entry_id')
			->where('photo_contest_id', '=', $this->id)
			->as_object(get_class($vote))
			->execute($this->_db);
	}

	/**
	 * Return the votes that belong to this contest and IP
	 *
	 * @param $ip string The ip of the user to check
	 * @param $email string The email of the user to check
	 * @return Model_Photo_Contest_Vote[] The ip objects found
	 */
	public function duplicate_vote_check($ip, $email)
	{
		$vote = new Model_Photo_Contest_Vote;

		return DB::select_array($vote->fields())
			->from($vote->get_table_name())
			->join('photo_contest_entries', 'LEFT')
			->on('photo_contest_entries.id', '=', 'photo_contest_votes.photo_contest_entry_id')
			->where('photo_contest_id', '=', $this->id)
			->and_where('photo_contest_votes.status', '=', 'confirmed')
			->and_where_open()
				->where('ip_address', '=', $ip)
				->or_where('email', '=', $email)
			->and_where_close()
		->as_object(get_class($vote))
		->execute($this->_db);
	}

	/**
	 * Count the total entries that belong to this contest
	 *
	 * @return int The amount of entries
	 */
	public function count_total_entries()
	{
		$entry 	= new Model_Photo_Contest_Entry;
		$entry_filter = DB::select()
			->where('photo_contest_id', '=', $this->id)
			->where('status', '=', 'accepted');

		return count($entry->load($entry_filter, NULL));
	}

	/**
	 * Add a entry to this photo_contest
	 *
	 * @param array $data The entry fields
	 * @return Model_Photo_Contest_Entry The entry added
	 */
	public function add_entry(array $data)
	{
		$entry = new Model_Photo_Contest_Entry;
		$entry->set_fields($data);
		$entry->photo_contest_id = $this->id;
		$entry->save();

		return $entry;
	}

	/**
	 * Add a reward to this photo_contest
	 *
	 * @param array $data
	 * @return Model_Photo_Contest_Reward
	 */
	public function add_reward(array $data)
	{
		$reward = new Model_Photo_Contest_Reward;
		$reward->set_fields($data);
		$reward->photo_contest_id = $this->id;
		$reward->save();

		return $reward;
	}
}