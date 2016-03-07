<?php

use Codeception\Util\Stub;

class ProfileDashboardTest extends \Codeception\TestCase\Test
{
	public function testGetsProfileDashboardDetails()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_create_user_repository_mock($entity_user);

		$blog_repository = $this->_create_blog_repository_mock(NULL);

		$activities = array();
		$activity_repository = $this->_create_activity_repository_mock($activities);

		$following_repository = $this->_create_following_repository_mock(array());

		$profile_dashboard = new Usecase_User_GetsProfileDashboard($user_repository, $blog_repository, $activity_repository, $following_repository);
		$return_value = $profile_dashboard->execute($entity_user);

		$required_values = array(
			'blog_list' => array(),
			'timeline' => array(),
			'top_blog_list' => null,
			'following' => array(),
			'own_blog_list' => null
		);

		$this->assertEquals($return_value, $required_values);
	}

	private function _create_user_repository_mock($users)
	{
		$user = $this->getMock('Repository_User');

		$user->expects($this->any())
			->method('load_object')
			->will($this->returnValue($users));

		return $user;
	}

	private function _create_blog_repository_mock($blogs)
	{
		$blog = $this->getMock('Repository_Blog');

		$blog->expects($this->any())
			->method('load_set_advanced')
			->will($this->returnValue($blogs));

		return $blog;
	}

	private function _create_activity_repository_mock($activities)
	{
		$activity = $this->getMock('Repository_Activity');

		$activity->expects($this->once())
			->method('load_from_following')
			->will($this->returnValue($activities));

		return $activity;
	}

	private function _create_following_repository_mock($followers)
	{
		$follower = $this->getMock('Repository_Follower');

		$follower->expects($this->any())
			->method('get_following_users')
			->will($this->returnValue($followers));

		return $follower;
	}
}