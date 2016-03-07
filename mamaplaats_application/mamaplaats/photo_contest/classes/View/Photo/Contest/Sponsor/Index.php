<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Sponsor_Index extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title = '';

	/**
	 * @var Model_Photo_Contest
	 */
	protected $_contest;

	/**
	 * @param Model_Photo_Contest $contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $contest)
	{
		$this->_contest = $contest;
		$this->title = $contest->title;

		parent::__construct();
	}

	/**
	 * @return Model_Photo_Contest The next contest
	 */
	public function contest()
	{
		$example_photo = Route::get('image_resize')->uri(array(
			'type' => 'contest',
			'image' => $this->_contest->example_photo,
			'width' => '350',
			'height' => 'n'
		));

		return array_merge($this->_contest->as_array(), array(
			'example_photo' => URL::site($example_photo),
		));
	}

	public function rewards()
	{
		$rewards = array();
		foreach ($this->_contest->get_rewards() as $reward)
		{
			$photo_url = Route::get('image_resize')->uri(array(
				'type' => 'reward',
				'image' => $reward->photo_url,
				'width' => '200',
				'height' => 'n'
			));

			$rewards[] = array_merge($reward->as_array(), array(
				'photo_url' => URL::site($photo_url),
			));
		}

		return $rewards;
	}
}