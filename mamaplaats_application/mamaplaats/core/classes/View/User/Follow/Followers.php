<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Follow_Followers {

	use View_Helper_ImagePath;

	public $title = 'Mijn Volgers';
	public $messages = array();

	private $_user;
	private $_followers;

	public function __construct($user, $followers)
	{
		$this->_user = $user;
		$this->_followers = $followers;
	}

	public function user()
	{
		return $this->_user;
	}

	public function followers()
	{
		$followers = array();
		foreach ($this->_followers as $follower)
		{
			$follower->avatar = $this->get_image_path('avatar', $follower->id, 140, 120, $follower->profile_image_ext);
			$follower->biography = Text::limit_chars($follower->biography, 200, '...', TRUE);

			$followers[] = $follower;
		}

		return $followers;
	}
}