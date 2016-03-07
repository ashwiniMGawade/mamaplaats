<?php

use Codeception\Util\Stub;

class SendInstantResponseTest extends \Codeception\TestCase\Test
{

	private function _create_comment_repository_mock($comments)
	{
		$comment = $this->getMock('Repository_Comment');

		$comment->expects($this->any())
			->method('load_set_advanced')
			->will($this->returnValue($comments));

        $comment->expects($this->any())
            ->method('load_set')
            ->will($this->returnValue($comments));
		return $comment;
	}

    public function testHaltExecutionAndReturnFalseWhenNoRecentBlogArePresentInPastTenMinutes()
    {
        $comment_repository = $this->_create_comment_repository_mock(array());

        $send_instant_response = new Usecase_Admin_SendInstantCommentResponse($comment_repository, NULL, NULL, NULL);
        $return_value = $send_instant_response->execute('-5 hours');

        $this->assertEquals($return_value, FALSE);
    }

	public function testSendEmailWhenAuthorIdAndUserIdNotMatched()
	{
		$comment_entity = new Entity_Comment();
		$comment_entity->post_id = 86920;
		$comment_entity->author_email = "test@example.com";
		$comment_entity->user_id = 100558;
		$comment_entity->blog_author = 100556;

		$comment_return = array($comment_entity);

		$comment_repository = $this->_create_comment_repository_mock($comment_return);

		$blog_repository = $this->_create_blog_repository_mock();
		$repository_user = $this->_create_user_repository_mock();
		$message = $this->_create_message_email_mock('once');
		$send_instant_response = new Usecase_Admin_SendInstantCommentResponse($comment_repository, $blog_repository, $repository_user, $message);

		$return_value = $send_instant_response->execute('-5 hours');
	}

    public function testReturnEmptyWhenAuthorIdAndUserIdIsMatched()
	{
		$message = $this->_create_message_email_mock('never');

		$comment_repository = $this->_create_comment_repository_mock(array());

		$send_instant_response = new Usecase_Admin_SendInstantCommentResponse($comment_repository, NULL, NULL, $message);

		$return_value = $send_instant_response->execute('-5 hours');
	}

	private function _create_blog_repository_mock()
	{
		$entity_return = array();
		$entity_return[] = array(
			'blog' => new Entity_Blog(),
			'user' => new Entity_User(),
			'media' => new Entity_Media(),
		);

		$blog = $this->getMock('Repository_Blog');

		$blog->expects($this->any())
			->method('load_set_advanced')
			->will($this->returnValue($entity_return));

		return $blog;
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

	private function _create_message_email_mock($time)
	{
		$message_email = $this->getMock('Message_Email');
		if($time == "once") {
			$message_email->expects($this->once())
				->method('send');
		}else{
			$message_email->expects($this->never())
				->method('send');
		}

		return $message_email;
	}
}