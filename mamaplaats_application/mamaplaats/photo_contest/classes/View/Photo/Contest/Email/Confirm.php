<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Email_Confirm extends Kostache {

	/**
	 * @var string The page title
	 */
	public $subject = '';

	/**
	 * @var Model_Photo_Contest_Vote
	 */
	private $_vote;
	
	/**
	 * @var Model_Photo_Contest
	 */
	private $_contest;

	/**
	 * Load the vote view.
	 *
	 * @param Model_Photo_Contest_Vote $vote
	 */
	public function __construct(Model_Photo_Contest_Vote $vote, Model_Photo_Contest $contest)
	{
		$this->_vote = $vote;
		$this->_contest = $contest;
		
		parent::__construct();
	}

	public function vote()
	{
		//Build the confirm url
		$query = URL::query(array(
			'email' => $this->_vote->email,
			'hash' => $this->_vote->confirmation_hash
		));
		$confirm_url = URL::site('fotowedstrijd/confirmeer/foto/'
			.$this->_vote->photo_contest_entry_id
			.$query);
		
		return array_merge($this->_vote->as_array(), array(
			'confirm_url' => $confirm_url,
			'mail_vote_footer_content' => $this->_contest->mail_vote_footer_content
		));
	}
}