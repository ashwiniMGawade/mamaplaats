<?php

use Codeception\Util\Stub;

class UpdatesConversationMessageTest extends \Codeception\TestCase\Test
{
    public function testIfDraftMessageIsNotSavedWhenInvalidContentIsPassed()
    {
        $this->setExpectedException('Validate_Exception', 'Invalid message posted');
        $conversation_repository = $this->_create_conversation_repository_mock();
        $user_repository = $this->_create_user_repository_mock();
        $user = $user_repository->load_object(array());

        $usecase = new Usecase_User_UpdatesConversationMessage($conversation_repository, new Validate_Template);
        $usecase->execute($user, new Entity_Conversation());
    }

    public function testIfDraftMessageIsSavedWhenValidContentIsPassed()
    {
        $conversation_repository = $this->_create_conversation_repository_mock();
        $user_repository = $this->_create_user_repository_mock();
        $user = $user_repository->load_object(array());

        $entity =  new Entity_Conversation();
        $entity->id = 1;
        $entity->recipient_id = 1;
        $entity->author_id = 1;
        $entity->author_ip = '192.168.56.1';
        $entity->created = date('Y-m-d H:i:s', time());
        $entity->content = 'test';

        $usecase = new Usecase_User_UpdatesConversationMessage($conversation_repository, new Validate_Template);
        $usecase->execute($user, $entity);
    }

    private function _create_conversation_repository_mock()
    {
        $entity_return = array();
        $entity_return =  new Entity_Conversation();
        $entity_return->id = 1;
        $entity_return->recipient_id = 1;
        $entity_return->author_id = 1;
        $entity_return->author_ip = '192.168.56.1';
        $entity_return->created = date('Y-m-d H:i:s', time());
        $entity_return->content = 'test';

        $conversation = $this->getMock('Repository_Conversation');

        $conversation->expects($this->any())
            ->method('load_object')
            ->will($this->returnValue($entity_return));

        $conversation->expects($this->any())
            ->method('update')
            ->with($this->isInstanceOf('Entity_Conversation'))
            ->will($this->returnValue($entity_return));

        return $conversation;
    }

    private function _create_user_repository_mock()
    {
        $user_entity = new Entity_User();
        $user_entity->id = 1;
        $user_entity->email = 'testing@smartshore.nl';
        $user_return = $user_entity;
        $user = $this->getMock('Repository_User');

        $user->expects($this->any())
            ->method('load_object')
            ->will($this->returnValue($user_return));

        return $user;
    }
}