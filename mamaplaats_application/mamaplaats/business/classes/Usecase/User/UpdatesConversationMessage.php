<?php

class Usecase_User_UpdatesConversationMessage {

    /**
     * @var Repository_Conversation
     */
    private $_repository_conversation;

    /**
     * @var Validate_Template
     */
    private $_validate;

    public function __construct($repository_user_message, $validate)
    {
        $this->_repository_conversation = $repository_user_message;
        $this->_validate = $validate;
    }

    public function execute(Entity_User $user, Entity_Conversation $conversation)
    {
        $this->_validate($conversation);
        return $this->_repository_conversation->update($conversation);
    }

    private function _validate($message)
    {
        $this->_validate->load($message->as_array());
        $this->_validate->rules(
            array(
                'author_id'		=> array(array('not_empty'), array('digit')),
                'recipient_id'	=> array(array('not_empty'), array('digit')),
                //	'author_ip' 	=> array(array('not_empty'), array('ip')),
                'created' 		=> array(array('not_empty')),
                'content' 		=> array(array('not_empty')),
            )
        );

        if ($this->_validate->check() !== TRUE)
        {
            Throw new Validate_Exception('Invalid message posted', $this->_validate->errors());
        }
    }
}