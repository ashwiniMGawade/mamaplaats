<?php

defined('SYSPATH') or die('No direct script access.');

class View_User_Password_Reset {

	use View_Helper_Message;

	public $title = 'Wachtwoord Vergeten';

	public function __construct($messages)
	{
		$this->messages = $messages;
	}
}