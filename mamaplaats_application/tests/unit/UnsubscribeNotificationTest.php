<?php

use Codeception\Util\Stub;

class UnsubscribeNotificationTest extends \Codeception\TestCase\Test
{
	public function testThrowsValidateExceptionWhenCommentTypeIsNull()
	{
		$this->setExpectedException('Validate_Exception', 'We are sorry!. But,no such user is present');

		$unsubscribe_notifications	= new Usecase_Guest_UnsubscribeNotification(NULL);
		$unsubscribe_notifications->execute(NULL, '111', '#dummykey#');
	}

	public function testThrowsValidateExceptionWhenUserIdIsNull()
	{
		$this->setExpectedException('Validate_Exception', 'We are sorry!. But,no such user is present');

		$unsubscribe_notifications	= new Usecase_Guest_UnsubscribeNotification(NULL);
		$unsubscribe_notifications->execute('comment', NULL, '#dummykey#');
	}

	public function testThrowsValidateExceptionWhenHashKeyIsNull()
	{
		$this->setExpectedException('Validate_Exception', 'We are sorry!. But,no such user is present');

		$unsubscribe_notifications	= new Usecase_Guest_UnsubscribeNotification(NULL);
		$unsubscribe_notifications->execute('comment', '101', NULL);
	}

	public function testThrowsValidateExceptionWhenCommentTypeANDUserIdAndHashKeyAreNotNullButDoesNotmatchWithDatabaseValues()
	{
		$this->setExpectedException('Validate_Exception', 'We are sorry!. But,no such user is present');

		$user_repository = $this->_create_user_repository_mock(new Entity_User);
		$unsubscribe_notifications	= new Usecase_Guest_UnsubscribeNotification($user_repository);
		$unsubscribe_notifications->execute('comment','111', '#dummykey#');
	}

	private function _create_user_repository_mock($user_entity)
	{
		$user = $this->getMock('Repository_Comment');

		$user->expects($this->any())
			->method('load_object')
			->will($this->returnValue($user_entity));

		return $user;
	}
}