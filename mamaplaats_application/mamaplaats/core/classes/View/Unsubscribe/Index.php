<?php defined('SYSPATH') or die('No direct script access.');

class View_Unsubscribe_Index {

	use View_Helper_Message;

	public $title = 'Uitschrijven Bekendmakingen';

	public function __construct($user, $messages)
	{
		$this->_user = $user;
		$this->messages = $messages;
	}

	public function success()
	{
		return ( ! empty($this->messages['type']) AND $this->messages['type'] == 'success');
	}

	public function user()
	{
		return $this->_user;
	}


}