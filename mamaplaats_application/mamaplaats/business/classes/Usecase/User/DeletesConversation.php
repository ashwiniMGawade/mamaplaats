<?php

class Usecase_User_DeletesConversation {
	/**
	 * @var Repository_Conversation
	 */
	private $_repository_conversation;

	public function __construct($repository_conversation)
	{
		$this->_repository_conversation = $repository_conversation;
	}

	public function execute($user_id, array $partner_ids, $conversation_type = '')
	{
		foreach ($partner_ids as $partner_id)
		{
            if ($conversation_type == 'draft') {
                $messages = $this->_repository_conversation->get_conversation($user_id, $partner_id, $conversation_type);
            } else {
                $messages = $this->_repository_conversation->get_conversation($user_id, $partner_id);
            }

           	foreach ($messages as $message)
			{
				$this->_repository_conversation->delete($message);
			}
		}
	}
}