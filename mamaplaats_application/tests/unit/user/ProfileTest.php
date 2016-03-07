<?php

use Codeception\Util\Stub;

class ProfileTest extends \Codeception\TestCase\Test
{
	public function testThrowsValidateExceptionWhenAnyOfTheFieldIsEmptyWhileChangePassword()
	{
		$this->setExpectedException('Validate_Exception', 'Password mismatch');

		$password_hash_mock = $this->_password_hash_mock(FALSE);
		$user_repository = $this->_user_repository_mock();

		$update_user_profile	= new Usecase_User_UpdatesProfile($user_repository, NULL, $password_hash_mock, NULL, NULL, NULL, NULL);

		$user = new Entity_User;
		$post_fields = array(
			'old_password' => '',
			'new_password' => '',
			'confirm_password'=> '',
		);

		$update_user_profile->execute($user, $post_fields);
	}

	public function testThrowsValidateExceptionWhenCurrentPasswordIsInCorrect()
	{
		$this->setExpectedException('Validate_Exception', 'Current password is incorrect');

		$password_hash_mock = $this->_password_hash_mock(FALSE);
		$user_repository = $this->_user_repository_mock();

		$update_user_profile	= new Usecase_User_UpdatesProfile($user_repository, NULL, $password_hash_mock, NULL, NULL, NULL, NULL);

		$user = new Entity_User;
		$post_fields = array(
			'old_password' => 'password',
			'new_password' => 'new_password',
			'confirm_password'=> 'confirm_password',
		);

		$update_user_profile->execute($user, $post_fields);
	}

	public function testThrowsValidateExceptionWhenNewPasswordAndConfirmPasswordDoesNotMatch()
	{
		$this->setExpectedException('Validate_Exception', 'Password mismatch');

		$password_hash_mock = $this->_password_hash_mock(TRUE);
		$user_repository = $this->_user_repository_mock();

		$update_user_profile	= new Usecase_User_UpdatesProfile($user_repository, NULL, $password_hash_mock, NULL, NULL, NULL, NULL);

		$user = new Entity_User;
		$post_fields = array(
			'old_password' => 'pass@word',
			'new_password' => 'new_password',
			'confirm_password'=> 'confirm_password',
		);

		$update_user_profile->execute($user, $post_fields);
	}

	private function _password_hash_mock($returns)
	{
		$validate_password = $this->getMockBuilder('PasswordHash')->setConstructorArgs(array(8, TRUE))->getMock();

		$validate_password->expects($this->any())
			->method('CheckPassword')
			->will($this->returnValue($returns));

		return $validate_password;
	}

	private function _user_repository_mock()
	{
		$user = new Entity_User;
		$user->password = 'pass@word';

		$user_repository = $this->getMock('Repository_User');

		$user_repository->expects($this->any())
			->method('load_object')
			->will($this->returnValue($user));

		return $user_repository;
	}
}