<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Login {

	use View_Helper_Message;

	public $title = 'Log in bij Mamaplaats';

	public function __construct($fields, $messages)
	{
		$this->_fields = $fields;
		$this->messages = $messages;
	}

	public function fields()
	{
		return $this->_fields;
	}
}