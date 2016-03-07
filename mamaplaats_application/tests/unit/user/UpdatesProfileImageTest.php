<?php

use Codeception\Util\Stub;

class UpdatesProfileImageTest extends \Codeception\TestCase\Test
{
	public function testUpdateUserWhenNoUserIsFoundForUpdatingProfileImageExtension()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_user_repository_mock($entity_user);

		$update_user_profile_image = new Usecase_User_UpdatesProfileImage($user_repository);
		$update_user_profile_image->execute();
	}

	public function testUpdateUserWhenUsersAreFoundForUpdatingProfileImageExtensionButImageDoesNotExist()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_update_user_without_image_repository_mock($entity_user);

		$update_user_profile_image = new Usecase_User_UpdatesProfileImage($user_repository);
		$update_user_profile_image->execute();
	}

	private function _user_repository_mock($entity_user)
	{
		$user = $this->getMock('Repository_User');

		$user->expects($this->once())
			->method('count_users_to_update_image_extension');

		$user->expects($this->once())
			->method('get_users_to_update_image_extension');

		$user->expects($this->never())
			->method('load_object')
			->will($this->returnValue($entity_user));

		$user->expects($this->never())
			->method('update')
			->will($this->returnValue($entity_user));

		return $user;
	}

	private function _update_user_without_image_repository_mock($entity_user)
	{
		$user = $this->getMock('Repository_User');

		$users_count = array('total_users' => 1);

		$user->expects($this->once())
			->method('count_users_to_update_image_extension')
			->will($this->returnValue($users_count));

		$list_users_data = array();
		$list_users_data[] = array('id' => '', 'profile_image_ext' => 'png');
		$user->expects($this->once())
			->method('get_users_to_update_image_extension')
			->will($this->returnValue($list_users_data));

		$user->expects($this->any())
			->method('load_object')
			->will($this->returnValue($entity_user));

		$user->expects($this->any())
			->method('update')
			->will($this->returnValue($entity_user));

		return $user;
	}
}