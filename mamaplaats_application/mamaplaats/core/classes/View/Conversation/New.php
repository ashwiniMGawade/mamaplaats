<?php defined('SYSPATH') or die('No direct script access.');

class View_Conversation_New {

	use View_Helper_Message;

	public $title = 'Mijn Berichten';
	public $user = NULL;
    public $user_message ;

	public function __construct($user, $messages,  $user_message = array())
	{
		$this->user = $user;
		$this->messages = $messages;
		$this->user_message = $user_message;
	}

	public function has_messages()
	{
		return $this->get_messages();
	}

    public function conversation(){
        return !empty($this->user_message) ? $this->user_message[0] : array();
    }
}

