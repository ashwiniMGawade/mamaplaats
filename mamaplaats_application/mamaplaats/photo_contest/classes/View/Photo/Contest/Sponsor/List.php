<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Sponsor_List extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title = 'De Sponsors van de fotowedstrijden';

	/**
	 * @var Model_Photo_Contest
	 */
	protected $_active_contest;

	/**
	 * @var Model_Photo_Contest
	 */
	protected $_next_contest;

	/**
	 * @param Model_Photo_Contest $next_contest The photo contest for this view
	 * @param Model_Photo_Contest $active_contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $active_contest, Model_Photo_Contest $next_contest)
	{
		$this->_active_contest = $active_contest;
		$this->_next_contest = $next_contest;

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest The active contest
	 */
	public function active_contest()
	{
		if ($this->_active_contest->id === NULL)
		{
			return false;
		}

		$sponsor_photo = Route::get('image_resize')->uri(array(
			'type' => 'sponsor',
			'image' => $this->_active_contest->sponsor_photo,
			'width' => '300',
			'height' => 'n'
		));

		return array_merge($this->_active_contest->as_array(), array(
			'sponsor_photo' => URL::site($sponsor_photo),
		));
	}

	/**
	 * @return Model_Photo_Contest The next contest
	 */
	public function next_contest()
	{
		if ($this->_next_contest->id === NULL)
		{
			return false;
		}

		$sponsor_photo = Route::get('image_resize')->uri(array(
			'type' => 'sponsor',
			'image' => $this->_next_contest->sponsor_photo,
			'width' => '300',
			'height' => 'n'
		));

		return array_merge($this->_next_contest->as_array(), array(
			'sponsor_photo' => URL::site($sponsor_photo),
		));
	}
}