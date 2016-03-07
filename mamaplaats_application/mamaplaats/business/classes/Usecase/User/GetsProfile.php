<?php

class Usecase_User_GetsProfile {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_Newsletter_Subscriber
	 */
	private $_repository_subscriber;

	public function __construct($repository_user, $repository_subscriber)
	{
		$this->_repository_user 		= $repository_user;
		$this->_repository_subscriber 	= $repository_subscriber;
	}

	public function execute(Entity_User $user)
	{
		$user 		= $this->_repository_user->load_object(array(array('id', '=', $user->id)));
		$subscriber = $this->_repository_subscriber->load_object(array('email' => $user->email));

		if ( ! empty($subscriber))
		{
			$user->newsletter_subscriptions = $subscriber->newsletters;
		}

		return $user;
	}
}