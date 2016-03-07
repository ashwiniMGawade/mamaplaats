<?php

class View_User_Profile_Interest {

	use View_Helper_Message;

	private $_interests;

	public function __construct($interests, $messages)
	{
		$this->_interests = $interests;
		$this->messages = $messages;
	}

	public function has_messages()
	{
		return $this->format_messages($this->messages);
	}


}