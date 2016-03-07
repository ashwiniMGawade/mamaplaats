<?php defined('SYSPATH') or die('No direct script access.');

class View_Conversation_Index {

	use View_Helper_Message, View_Helper_ImagePath;

	public $title = 'Mijn Berichten';
	private $_conversation;
	private $_user;
	private $_partner_id;
	private $_conversation_type;

	public function __construct(array $conversation, Entity_User $user, $partner_id, $messages, $conversation_type)
	{
		$this->_conversation = $conversation;
		$this->_user = $user;
		$this->messages = $messages;
		$this->_partner_id = $partner_id;
		$this->_conversation_type = $conversation_type;
	}

	public function partner_id()
	{
		return $this->_partner_id;
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

    public function is_draft_message(){
        if ($this->_conversation_type == 'draft') {
            return true;
        }
        return false;
    }

	public function conversation()
	{
		$conversation = array();
		foreach ($this->_conversation as $message)
		{
			$message['author']->avatar = $this->get_image_path(
				'avatar',
				$message['author']->id,
				70,
				70,
				$message['author']->profile_image_ext
			);
			$message['message']->created_formatted = strftime('%A %e %b %Y', strtotime($message['message']->created));
			$conversation[] = $message;
		}

		return $conversation;
	}
}