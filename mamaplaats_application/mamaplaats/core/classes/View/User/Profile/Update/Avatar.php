<?php

defined('SYSPATH') or die('No direct script access.');

class View_User_Profile_Update_Avatar extends View_Bootstrap {

	protected $_partials = array(
		'profile_menu' => 'user/profile/menu',
	);

	public $title = 'Profielfoto Wijzigen';

	/**
	 * @var Model_Wp_User
	 */
	private $user;
	public $messages = array();

	public function __construct($user)
	{
		$this->user = $user;
		parent::__construct();
	}

	public function has_messages()
	{
		return $this->_format_messages($this->messages);
	}

	public function get_avatar()
	{
		return $this->_get_avatar($this->user->ID);
	}

	public function user()
	{
		return $this->user;
	}
}