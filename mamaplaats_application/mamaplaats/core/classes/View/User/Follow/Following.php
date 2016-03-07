<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Follow_Following {

	use View_Helper_ImagePath;

	public $title = 'Ik Volg';
	public $messages = array();

	private $_user;
	private $_following;

	public function __construct($user, $following)
	{
		$this->_user = $user;
		$this->_following = $following;
	}

	public function user()
	{
		return $this->_user;
	}

	public function following()
	{
		$following = array();
		foreach ($this->_following as $followed)
		{
			$followed->avatar = $this->get_image_path('avatar', $followed->id, 140, 120, $followed->profile_image_ext);
			$followed->biography = Text::limit_chars($followed->biography, 200, '...', TRUE);

			$following[] = $followed;
		}

		return $following;
	}
}