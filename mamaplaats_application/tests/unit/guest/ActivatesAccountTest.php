<?php

use Codeception\Util\Stub;

class ActivatesAccountTest extends \Codeception\TestCase\Test
{

	public function testSubscribeAsUserIsNotExecutedWhenReferenceIsEmpty()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_create_user_repository_mock($entity_user);

		$newsletter_subscribe_repository = $this->_create_newsletter_subscribe_repository_mock('never');

		$groups = array('hellofresh');
		$sign_up_image_repository = $this->_create_sign_up_image_repository_mock($groups);

		$entity_newsletter_subscribe = new Newsletter_Subscribe($newsletter_subscribe_repository, $sign_up_image_repository);

		$guest_activates_account = new Usecase_Guest_ActivatesAccount($user_repository, $entity_newsletter_subscribe);
		$guest_activates_account->execute(1, 'test-key', '', '', '', '');
	}

	public function testSubscribeAsUserIsExecutedWhenReferenceIsNotEmpty()
	{
		$entity_user = new Entity_User;
		$user_repository = $this->_create_user_repository_mock($entity_user);

		$newsletter_subscribe_repository = $this->_create_newsletter_subscribe_repository_mock('once');

		$groups = array('hellofresh');
		$sign_up_image_repository = $this->_create_sign_up_image_repository_mock($groups);

		$entity_newsletter_subscribe = new Newsletter_Subscribe($newsletter_subscribe_repository, $sign_up_image_repository);

		$guest_activates_account = new Usecase_Guest_ActivatesAccount($user_repository, $entity_newsletter_subscribe);
		$guest_activates_account->execute(1, 'test-key', '', '', '', 'social_blue');
	}

	private function _create_user_repository_mock($entity_user)
	{
		$user = $this->getMock('Repository_User');

		$user->expects($this->once())
			->method('load_object')
			->will($this->returnValue($entity_user));

		$user->expects($this->any())
			->method('update')
			->will($this->returnValue($entity_user));

		return $user;
	}

	private function _create_newsletter_subscribe_repository_mock($expects)
	{
		$newsletter_subscribe = $this->getMock('Repository_Newsletter_Subscriber');
		$newsletter_subscribe->expects($this->$expects())
			->method('create');

		return $newsletter_subscribe;
	}

	private function _create_sign_up_image_repository_mock($groups)
	{
		$user = $this->getMock('Repository_SignUpImage');

		$user->expects($this->any())
			->method('get_group_list')
			->will($this->returnValue($groups));

		return $user;
	}
}