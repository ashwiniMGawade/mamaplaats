<?php defined('SYSPATH') or die('No direct script access.');

class View_Conversation_List {

	use View_Helper_Message, View_Helper_ImagePath;

	private $_conversation_list;
	private $_user;
    public $_conversation_type;


	public function __construct($conversation_list, $user, $messages, $conversation_type)
	{
		$this->_conversation_list = $conversation_list;
		$this->_user = $user;
		$this->messages = $messages;
		$this->_conversation_type = $conversation_type;
	}

    public function getTitle(){
        switch($this->_conversation_type) {
            case 'inbox' : return "Postvak in";break;
            case 'outbox' : return "Postvak uit";break;
            case 'draft' : return "Concepten";break;
            default: return "Berichten";
        }
    }

	public function has_messages()
	{
		return $this->get_messages();
	}

	public function conversation_list()
	{
		$conversation_list = array();
		foreach ($this->_conversation_list as $conversation)
		{
			$conversation['last_message'] = $conversation['conversation'][0];
			$conversation['last_message']->created_formatted = strftime('%A %e %b %Y', strtotime($conversation['last_message']->created));
			$conversation['last_message']->content = substr($conversation['last_message']->content, 0, 150).'...';
			$conversation['conversation']['new_count'] = $this->_get_new_count($conversation['conversation']);

			$conversation['conversation_partner']->avatar = $this->get_image_path(
				'avatar',
				$conversation['conversation_partner']->id,
				70,
				70,
				$conversation['conversation_partner']->profile_image_ext
			);

			$conversation_list[] = $conversation;
		}

		return $conversation_list;
	}

	private function _get_new_count($conversation)
	{
		$new_count = 0;
		foreach ($conversation as $message)
		{
			if ($message->recipient_id == $this->_user->id)
			{
				$new_count += $message->unread;
			}
		}
		return $new_count;
	}
}