<?php

use Codeception\Util\Stub;

class LoginSuccessTest extends \Codeception\TestCase\Test
{
	public function testReturnFalseWhenUserIdDoesNotExist()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_create_user_repository_mock($entity_user);

		$login_success = new Usecase_User_LoginSuccess($user_repository);
		$return_value = $login_success->execute(NULL);

		$this->assertEquals($return_value, FALSE);
	}

	private function _create_user_repository_mock($entity_user)
	{
		$user = $this->getMock('Repository_User');

		$user->expects($this->any())
			->method('load_object')
			->will($this->returnValue($entity_user));

		return $user;
	}

	public function testUpdateUserInfoWhenUserIdExist()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_create_update_user_mock($entity_user);

		$login_success = new Usecase_User_LoginSuccess($user_repository);
		$login_success->execute(1);
	}

	private function _create_update_user_mock($entity_user)
	{
		$user = $this->getMock('Repository_User');
		$user->expects($this->any())
			->method('load_object')
			->will($this->returnValue($entity_user));

		$user->expects($this->once())
			->method('update');

		return $user;
	}
}