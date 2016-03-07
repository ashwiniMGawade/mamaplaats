<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Follow_Timeline {

	use View_Helper_ImagePath;

	public $title = 'Mijn Tijdlijn';
	public $messages = array();

	private $_user;
	private $_timeline;
	private $_select_info;

	public function __construct($user, $timeline, $select_info)
	{
		$this->_user = $user;
		$this->_timeline = $timeline;

		$this->_select_info = $select_info;
	}

	public function timeline()
	{
		$timeline = array();
		foreach ($this->_timeline as $timeline_item)
		{
			$timeline_item['activity']->date = date('d-m-Y H:i', strtotime($timeline_item['activity']->date));
			$timeline_item['activity']->path = URL::site($timeline_item['activity']->path, TRUE);
			$timeline_item['user']->avatar = $this->get_image_path(
				'avatar',
				$timeline_item['user']->id,
				100,
				86,
				$timeline_item['user']->profile_image_ext
			);

			$timeline[] = $timeline_item;
		}

		return $timeline;
	}
}