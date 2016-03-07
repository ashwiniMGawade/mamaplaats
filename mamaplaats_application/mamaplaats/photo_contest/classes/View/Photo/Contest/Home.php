<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Home extends View_Layout {

	/**
	 * @var string The page title
	 */
	public $title;

	/**
	 * @var Model_Photo_Contest The currently active Photo Contest
	 */
	protected $_active_contest;

	/**
	 * @var Model_Photo_Contest The next comming Photo Contest
	 */
	protected $_next_contest;

	/**
	 * @param Model_Photo_Contest $active_contest The photo contest for this view
	 * @param Model_Photo_Contest $next_contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $active_contest, Model_Photo_Contest $next_contest)
	{
		$this->_active_contest = $active_contest;
		$this->_next_contest = $next_contest;
		$this->title = 'Doe mee met onze fotowedstrijden';

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest Return the currently active contest
	 */
	public function active_contest()
	{
		$contest = $this->_active_contest;
		$example_photo = $this->_contest_photo($contest->example_photo);
		$sponsor_photo = $this->_sponsor_photo($contest->sponsor_photo);

		return array_merge($contest->as_array(), array(
			'example_photo' => URL::site($example_photo),
			'sponsor_photo' => URL::site($sponsor_photo),
			'rewards' => $this->_contest_rewards($contest->get_rewards()),
		));
	}

	/**
	 * @return Model_Photo_Contest Return the currently active contest
	 */
	public function next_contest()
	{
		$contest = $this->_next_contest;

		// If there is no active contest delete
		if ($contest->id === NULL)
		{
			return FALSE;
		}

		$example_photo = $this->_contest_photo($contest->example_photo, 225, 150);
		$sponsor_photo = $this->_sponsor_photo($contest->sponsor_photo);

		return array_merge($contest->as_array(), array(
			'example_photo' => URL::site($example_photo),
			'sponsor_photo' => URL::site($sponsor_photo),
			'rewards' => $this->_contest_rewards($contest->get_rewards(), 150, 100),
		));
	}

	protected function _sponsor_photo($photo)
	{
		return Route::get('image_resize')->uri(array(
			'type' => 'sponsor',
			'image' => $photo,
			'width' => 'n',
			'height' => '35'
		));
	}

	protected function _contest_photo($photo, $width = 400, $height = 300)
	{
		return Route::get('image_resize')->uri(array(
			'type' => 'contest',
			'image' => $photo,
			'width' => $width,
			'height' => $height
		));
	}

	protected function _contest_rewards($rewards, $width = 200, $height = 150)
	{
		$reward_array = array();
		foreach ($rewards as $reward)
		{
			$reward_photo = Route::get('image_resize')->uri(array(
				'type' => 'reward',
				'image' => $reward->photo_url,
				'width' => $width,
				'height' => $height,
			));

			$reward_array[] = array_merge($reward->as_array(), array(
				'photo_url' => URL::site($reward_photo),
				'type' => Text::alternate('main', 'week'),
			));
		}

		return $reward_array;
	}
}