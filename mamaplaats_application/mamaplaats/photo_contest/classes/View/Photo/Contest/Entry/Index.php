<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Entry_Index extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title = '';

	/**
	 * @var Model_Photo_Contest The photo contest
	 */
	protected $_photo_contest;

	/**
	 * @var Model_Photo_Contest_Entry The photo contest entry
	 */
	protected $_entry;

	/**
	 * @var Model_WP_User The user that is logged in
	 */
	protected $_user;

	/**
	 * @var bool Does the person have a limited view
	 */
	protected $_limited_view;

	/**
	 * Load the entry view.
	 *
	 * @param Model_Photo_Contest_Entry $entry
	 * @param Model_WP_User $user
	 */
	public function __construct(Model_Photo_Contest $contest, Model_Photo_Contest_Entry $entry, Model_WP_User $user, $limited_view = FALSE)
	{
		$this->_photo_contest	= $contest;
		$this->_entry 			= $entry->with('wp_user');
		$this->_limited_view 	= $limited_view;
		$this->title 			= $entry->title;

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest_Entry Return the contest entry
	 */
	public function entry()
	{
		// Hide the vote button when the contest is not active
		$current_date 	= date('Y-m-d');
		$vote_hidden 	= FALSE;
		if($this->_photo_contest->start_date > $current_date
			OR $this->_photo_contest->end_date < $current_date)
		{
			$vote_hidden = TRUE;
		}

		$photo_url = Route::get('image_resize')->uri(array(
			'type' => 'contest',
			'image' => $this->_entry->photo_url,
			'width' => '400',
			'height' => 'n'
		));

		return array_merge($this->_entry->as_array(), array(
			'photo_url' 	=> URL::site($photo_url),
			'username' 		=> $this->_entry->wp_user->display_name,
			'single_url' 	=> $this->_single_url($this->_entry->id),
			'share_text' 	=> $this->_share($this->_entry->title),
			'limited' 		=> $this->_limited_view,
			'voted'			=> (Cookie::get('contest_vote_'.$this->_entry->id) == 1),
			'vote_hidden'	=> $vote_hidden,
		));
	}

	protected function _share($title)
	{
		$type = 'guest';
		if ($this->_entry->wp_user_id == $this->_user->ID)
		{
			$type = 'owner';
		}
		else if (Cookie::get('contest_vote_'.$this->_entry->id) == 1)
		{
			$type = 'voted';
		}

		return $this->_share_text($title, $type);
	}
}