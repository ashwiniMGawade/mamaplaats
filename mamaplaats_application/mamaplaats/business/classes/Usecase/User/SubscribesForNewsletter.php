<?php

class Usecase_User_SubscribesForNewsletter {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Newsletter_Subscribe
	 */
	private $_newsletter_subscribe;

	public function __construct($repository_user, $newsletter_subscribe)
	{
		$this->_repository_user	= $repository_user;
		$this->_newsletter_subscribe = $newsletter_subscribe;
	}

	public function execute($user_id)
	{
		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id)));
		$user->newsletter = 1;

		$this->_repository_user->update($user);

		$this->_newsletter_subscribe->subscribe_as_user($user, 'all');
	}
}