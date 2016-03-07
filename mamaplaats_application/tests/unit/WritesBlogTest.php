<?php
use Codeception\Util\Stub;

class WritesBlogTest extends \Codeception\TestCase\Test
{
//    public function testSendEmailWhenThereAreFollowersFoundForBlogWritten()
//    {
//	    $entity_blog = new Entity_Blog;
//	    $repository_blog = $this->_create_blog_repository_mock($entity_blog);
//
//	    $repository_category = $this->_create_category_repository_mock(TRUE);
//
//	    $repository_activity = $this->_create_activity_repository_mock(NULL);
//
//	    $activity_logger = new Activity_Logger($repository_activity, new Activity_Converter);
//
//	    $entity_follower = new Entity_Follower;
//	    $entity_follower->email = 'test@example.com';
//	    $repository_follower = $this->_create_follower_repository_mock(array($entity_follower));
//
//	    $validate_blog = new Validate_Blog;
//
//	    $message = $this->_create_message_email_mock();
//
//	    $writes_blog = new Usecase_User_WritesBlog(
//		    $repository_blog,
//		    $repository_category,
//		    $validate_blog,
//		    $activity_logger,
//		    $repository_follower,
//		    $message
//	    );
//
//	    $post_fields = array(
//		    'thumbnail_id' => 1,
//		    'title' => 'title 1 title 1 title 1 title 1',
//		    'excerpt' => 'description 1 description 1 description 1 description 1 description 1 description 1',
//		    'content' => 'description 1 description 1 description 1 description 1 description 1 description 1
//		    description 1 description 1 description 1 description 1 description 1 description 1 description 1
//		    description 1',
//		    'category_id' => '',
//	    );
//
//	    $entity_user = new Entity_User;
//	    $entity_user->id = 1;
//
//        $writes_blog->execute($entity_user, NULL, $post_fields);
//    }

	private function _create_message_email_mock()
	{
		$message_email = $this->getMock('Message_Email');
		$message_email->expects($this->once())
				->method('send');

		return $message_email;
	}

	private function _create_blog_repository_mock($entity_blog)
	{
		$blog = $this->getMock('Repository_Blog');

		$blog->expects($this->once())
			->method('create')
			->will($this->returnValue($entity_blog));

		return $blog;
	}

	private function _create_category_repository_mock($value)
	{
		$category = $this->getMock('Repository_Category');

		$category->expects($this->once())
			->method('create_item_link')
			->will($this->returnValue($value));

		return $category;
	}

	private function _create_activity_repository_mock($value)
	{
		$activity = $this->getMock('Repository_Activity');

		$activity->expects($this->any())
			->method('create')
			->will($this->returnValue($value));

		return $activity;
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