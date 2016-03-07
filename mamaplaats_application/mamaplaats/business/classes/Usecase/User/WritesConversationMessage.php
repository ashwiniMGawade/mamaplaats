<?php

class Usecase_User_WritesConversationMessage
{

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

    public function execute(Entity_User $user, array $fields)
    {

        $message = new Entity_Conversation();
        $message->author_id = $user->id;
        $message->recipient_id = $fields['recipient_id'];
        $message->author_ip = $fields['author_ip'];
        $message->created = $fields['created'];
        $message->content = (isset($fields['content'])) ? $fields['content'] : '';
        $message->draft = (isset($fields['draft'])) ? 1 : 0;

        $this->_validate($message);

        $this->_repository_conversation->create($message);
    }

    private function _validate($message)
    {
        $this->_validate->load($message->as_array());
        $this->_validate->rules(
            array(
                'author_id' => array(array('not_empty'), array('digit')),
                'recipient_id' => array(array('not_empty'), array('digit')),
                'created' => array(array('not_empty')),
                'content' => array(array('not_empty')),
            )
        );

        if ($this->_validate->check() !== TRUE) {
            Throw new Validate_Exception('Invalid message posted', $this->_validate->errors());
        }
    }
}