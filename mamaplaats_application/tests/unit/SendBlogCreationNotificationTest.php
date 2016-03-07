<?php
use Codeception\Util\Stub;

class SendSNewBlogNotificationTest extends \Codeception\TestCase\Test
{

    public function testHaltExecutionAndReturnFalseWhenNoRecentBlogArePresentInPastTenMinutes()
    {
        $repository_blog = $this->_create_blog_repository_mock(array());

        $send_blog_creation_notification = new Usecase_Admin_SendsNewBlogNotification(NULL, $repository_blog, NULL);

        $return_value = $send_blog_creation_notification->execute("-10 minutes");

        $this->assertEquals($return_value, false);
    }

    public function testDontSendMailWhenRecentBlogIsCreatedByMamaplaats()
    {
        $entity_blog[] = array(
            'blog' => new Entity_Blog(),
            'user' => new Entity_User(),
            'media' => new Entity_Media(),
        );

        $entity_blog[0]['user']->email = 'info@mamaplaats.nl';

        $repository_blog = $this->_create_blog_repository_mock($entity_blog);

        $send_blog_creation_notification = new Usecase_Admin_SendsNewBlogNotification(null, $repository_blog, null);

        $send_blog_creation_notification->execute("-10 minutes");
    }


    public function testSendEmailWhenThereAreFollowersFoundForBlogWritten()
    {
        $entity_blog[] = array(
            'blog' => new Entity_Blog(),
            'user' => new Entity_User(),
            'media' => new Entity_Media(),
        );
        $repository_blog = $this->_create_blog_repository_mock($entity_blog);

        $entity_follower = new Entity_Follower;
        $entity_follower->email = 'test@example.com';
        $entity_follower->display_name = 'test';

        $repository_follower = $this->_create_follower_repository_mock(array($entity_follower));

        $message = $this->_create_message_email_mock();

        $send_blog_creation_notification = new Usecase_Admin_SendsNewBlogNotification($repository_follower, $repository_blog, $message);

        $send_blog_creation_notification->execute("-10 minutes");
    }

    private function _create_message_email_mock()
    {
        $message_email = $this->getMock('Message_Email');
        $message_email->expects($this->once())
            ->method('send');

        return $message_email;
    }

    private function _create_blog_repository_mock($entity_return)
    {
        $blog = $this->getMock('Repository_Blog');

        $blog->expects($this->any())
            ->method('load_set_advanced')
            ->will($this->returnValue($entity_return));

        return $blog;
    }

    private function _create_follower_repository_mock($followers)
    {
        $follower = $this->getMock('Repository_Follower');

        $follower->expects($this->once())
            ->method('get_followers')
            ->will($this->returnValue($followers));

        return $follower;
    }
}