<?php

defined('SYSPATH') or die('No direct script access.');

class View_User_Password_Update {

	use View_Helper_Message;

	public $title = 'Wachtwoord Aanpassen';

	public function __construct($messages)
	{
		$this->messages = $messages;
	}
}