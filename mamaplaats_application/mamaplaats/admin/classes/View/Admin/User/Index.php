<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_User_Index {

	use View_Helper_ImagePath, View_Helper_Message;

	protected $_user;

	public function __construct($user, $messages)
	{

		$this->_user = $user;
		$this->messages = $messages;
	}

	public function user()
	{
		$user = $this->_user;
		$user->is_male		= ($user->gender == 1);
		$user->is_female 	= ($user->gender == 2);
		$user->is_mother 	= ($user->author_type == 'mother');
		$user->is_expert 	= ($user->author_type == 'expert');
		$user->avatar	 	= $this->get_image_path('avatar', $user->id, 200, 200, $user->profile_image_ext);

		return $user;
	}

	public function interests()
	{
		return $this->_user->interests;
	}

	public function time()
	{
		return time();
	}
}