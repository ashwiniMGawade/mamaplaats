<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The Photo Contest Entry Model that contact the database
 *
 * @property $id
 * @property $photo_contest_id
 * @property $wp_user_id
 * @property $title
 * @property $description
 * @property $photo_url
 * @property $amount_votes
 * @property $status
 * @property $last_vote
 * @property $upload_date
 */
class Model_Photo_Contest_Entry extends AutoModeler_ORM
{
	protected $_table_name  = 'photo_contest_entries';

	protected $_belongs_to = array('wp_user');

	protected $_data = array(
		'id' 				=> NULL,
		'photo_contest_id' 	=> NULL,
		'wp_user_id' 		=> NULL,
		'title' 			=> '',
		'description' 		=> '',
		'photo_url' 		=> '',
		'amount_votes' 		=> 0,
		'status' 			=> 'pending',
		'last_vote' 		=> '',
		'upload_date' 		=> '',
	);

	protected $_rules = array(
		'id'				=> array(array('digit')),
		'photo_contest_id'	=> array(array('digit')),
		'wp_user_id'		=> array(array('digit')),
		'title'				=> array(array('not_empty')),
		'description'		=> array(array('not_empty')),
		'photo_url'			=> array(array('not_empty')),
		'amount_votes'		=> array(array('digit')),
		'status'			=> array(array('not_empty')),
	);

	/**
	 * @var int An entry has a rank
	 */
	public $rank = 0;

	/**
	 * Add a vote to this entry
	 *
	 * @param array $data
	 * @param Validation $validation
	 * @return Model_Photo_Contest_Vote
	 * @throws AutoModeler_Exception
	 */
	public function add_vote(array $data, Validation $validation)
	{
		if ($this->loaded() !== TRUE)
		{
			throw new AutoModeler_Exception('You cannot vote on a entry that isn\'t saved yet');
		}

		// Add the vote to the system
		$vote = new Model_Photo_Contest_Vote;
		$vote->set_fields($data);
		$vote->photo_contest_entry_id = $this->id;
		$vote->confirmation_hash = Text::random('alnum', 50);
		$vote->save($validation);

		return $vote;
	}

	/**
	 * Confirm the votes with the following email and hash combination
	 *
	 * @param $email
	 * @param $hash
	 */
	public function confirm_vote($email, $hash)
	{
		$vote = new Model_Photo_Contest_Vote;
		$filter = DB::select()
			->where('email', '=', $email)
			->and_where('confirmation_hash', '=', $hash);

		$vote_confirmed = FALSE;

		foreach ($vote->load($filter, NULL) as $vote)
		{
			$vote->status = 'confirmed';
			$vote->confirmation_hash = '';
			$vote->save();

			// If the vote has been successfully added
			if ($vote->loaded() === TRUE)
			{
				// Lets send the vote to the newsletter system
				if ($vote->newsletter == 1)
				{
					$vote->subscribe();
				}

				// Add a vote to this entry and save
				$this->amount_votes++;
				$this->last_vote = date('Y-m-d H:i:s');
				$this->save();

				$vote_confirmed = TRUE;
			}
		}

		// If no vote has been confirmed
		if ($vote_confirmed === FALSE)
			throw new AutoModeler_Exception('No vote has been found', array(), array());
	}

	public function save($validation = NULL)
	{
		$this->upload_date = date('Y-m-d H:i:s');

		parent::save($validation);
	}
}
