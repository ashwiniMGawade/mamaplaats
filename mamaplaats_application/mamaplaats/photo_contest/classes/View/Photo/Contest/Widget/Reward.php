<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Widget_Reward extends View_Photo_Contest {

	/**
	 * @var Model_Photo_Contest
	 */
	protected $_photo_contest;

	/**
	 * @param Model_Photo_Contest $photo_contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $photo_contest)
	{
		$this->_photo_contest = $photo_contest;

		parent::__construct();
	}

	public function rewards()
	{
		$rewards = array();

		foreach ($this->_photo_contest->get_rewards() as $reward)
		{
			$photo_url = Route::get('image_resize')->uri(array(
				'type' => 'reward',
				'image' => $reward->photo_url,
				'width' => '242',
				'height' => 'n'
			));

			$rewards[] = array_merge($reward->as_array(), array(
				'photo_url' => URL::site($photo_url),
			));
		}

		return $rewards;
	}

} // End View_Photo_Contest_Widget_Reward
