<?php

use Codeception\Util\Stub;

class ProfileProgressTest extends \Codeception\TestCase\Test
{
	public function testReturnFalseWhenUserIdDoesNotExist()
	{
		$user_repository = $this->_create_user_repository_mock(NULL);

		$follower_repository = $this->_create_follower_mock(NULL);

		$review_repository = $this->_create_review_mock(NULL);

		$profile_progress = new User_ProfileProgressHelper($user_repository, $follower_repository, $review_repository);
		$return_value = $profile_progress->stages_details(NULL);

		$this->assertEquals($return_value, FALSE);
	}

	public function testReturnProfileStagesDetailsWhenUserIdExists()
	{
		$user_repository = $this->_create_user_repository_mock(NULL);

		$follower_repository = $this->_create_follower_mock(NULL);

		$review_repository = $this->_create_review_mock(NULL);

		$profile_progress = new User_ProfileProgressHelper($user_repository, $follower_repository, $review_repository);
		$return_value = $profile_progress->stages_details(1);

		$required_values = array(
			'profile_completed' => array(),
			'blog_written' => 0,
			'writers_followed' => 0,
			'review_joined' => 0
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

	private function _create_follower_mock($follower_id)
	{
		$follower = $this->getMock('Repository_Follower');

		$follower->expects($this->any())
			->method('get_following')
			->will($this->returnValue($follower_id));

		return $follower;
	}

	private function _create_review_mock($reviews)
	{
		$review = $this->getMock('Repository_Review');

		$review->expects($this->any())
			->method('load_set')
			->will($this->returnValue($reviews));

		return $review;
	}
}