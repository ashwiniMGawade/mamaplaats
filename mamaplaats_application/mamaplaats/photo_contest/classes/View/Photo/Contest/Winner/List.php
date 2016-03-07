<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Winner_List extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title = 'De Fotowedstrijden en Winnaars';

	/**
	 * @var Model_Photo_Contest
	 */
	protected $contest;

	/**
	 * @param Model_Photo_Contest $contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $contest)
	{
		$this->_contest = $contest;

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest[] The active contest
	 */
	public function contests()
	{
		$contests = array();
		foreach ($this->_contest->get_past() as $contest)
		{
			$rewards = array();
			foreach ($contest->rewards as $reward)
			{
				$rewards[] = $reward->as_array();
			}

			$example_photo = Route::get('image_resize')->uri(array(
				'type' => 'contest',
				'image' => $contest->example_photo,
				'width' => '200',
				'height' => 'n'
			));

			$contests[] = array_merge($contest->as_array(), array(
				'example_photo' => URL::site($example_photo),
				'rewards' => $rewards,
			));
		}

		return $contests;
	}

	private function _load_rewards(array $rewards)
	{

	}
}