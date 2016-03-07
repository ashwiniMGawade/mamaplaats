<?php
use Codeception\Util\Stub;

class UpdatesFollowingTest extends \Codeception\TestCase\Test
{

    public function testHaltExecutionAndReturnFalseWhenUserIsAlredayFollowingTheUser()
    {
        $repository_user = $this->_create_user_repository_mock();

        $user_entity = new Entity_User();
        $user_entity->id = 1;
        $user_entity->email = 'testing@smartshore.nl';

        $entity_follower = new Entity_Follower;
        $entity_follower->id = 2;
        $entity_follower->display_name = 'test';
        $entity_follower->email = 'testing2@smartshore.nl';

        $repository_follower = $this->_create_follower_repository_mock(array($entity_follower), 'once', 'any');
        $send_new_follower_notification = new Usecase_User_UpdatesFollowing($repository_follower, $repository_user, null);

        $return_value = $send_new_follower_notification->execute($user_entity, 2);

        $this->assertEquals($return_value, FALSE);
    }


    public function testSendEmailWhenUserIsAddedToFollowersList()
    {
        $repository_user = $this->_create_user_repository_mock();

        $user_entity = new Entity_User();
        $user_entity->id = 1;
        $user_entity->email = 'testing@smartshore.nl';

        $repository_follower = $this->_create_follower_repository_mock(array(), 'any', 'once');

        $message = $this->_create_message_email_mock();

        $send_new_follower_notification = new Usecase_User_UpdatesFollowing($repository_follower, $repository_user, $message);

        $return_value = $send_new_follower_notification->execute($user_entity, 2);

        $this->assertEquals($return_value, true);
    }

    private function _create_message_email_mock()
    {
        $message_email = $this->getMock('Message_Email');
        $message_email->expects($this->once())
            ->method('send');
        return $message_email;
    }


    private function _create_follower_repository_mock($followers, $delete_following_called_times, $add_following_called_times)
    {
        $follower = $this->getMock('Repository_Follower');

        $follower->expects($this->once())
            ->method('get_following')
            ->will($this->returnValue($followers));

        $follower->expects($this->$delete_following_called_times())
            ->method('delete_following')
            ->will($this->returnValue(true));

        $follower->expects($this->$add_following_called_times())
            ->method('add_following')
            ->will($this->returnValue(true));

        return $follower;
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