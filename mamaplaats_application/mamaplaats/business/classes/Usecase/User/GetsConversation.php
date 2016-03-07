<?php

class Usecase_User_GetsConversation {

	/**
	 * @var Repository_Conversation
	 */
	private $_repository_conversation;

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_conversation, $repository_user)
	{
		$this->_repository_conversation = $repository_conversation;
		$this->_repository_user	= $repository_user;
	}

	public function execute($user_id, $partner_id, $conversation_type = '')
	{
		$conversation = $this->_get_conversation($user_id , $partner_id, $conversation_type);
		return $this->_add_authors($user_id, $conversation);
	}

	private function _get_conversation($user_id, $partner_id, $conversation_type)
	{
		return $this->_repository_conversation->get_conversation($user_id, $partner_id, $conversation_type);
	}

	private function _add_authors($user_id, $conversation)
	{
		$conversation_with_author = array();
		foreach ($conversation as $message)
		{
			if ($message->recipient_id == $user_id)
			{
				$this->_mark_as_read($message);
			}

			$conversation_with_author[] = array(
				'message' => $message,
				'author' => $this->_repository_user->load_object(array(array('id', '=', $message->author_id))),
			);
		}

		return $conversation_with_author;
	}

	private function _mark_as_read(Entity_Conversation $message)
	{
		$message->unread = 0;
		$this->_repository_conversation->update($message);
	}
} 