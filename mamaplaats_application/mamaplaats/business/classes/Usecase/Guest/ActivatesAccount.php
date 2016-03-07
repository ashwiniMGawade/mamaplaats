<?php

class Usecase_Guest_ActivatesAccount {

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
		$this->_repository_user 		= $repository_user;
		$this->_newsletter_subscribe	= $newsletter_subscribe;
	}

	public function execute($user_id, $key, $source = NULL, $newsletter_group = false, $mailchimp_group = NULL, $ref = '')
	{
		$user = $this->_repository_user->load_object(array(array('id', '=', $user_id), array('activation_key', '=', $key)));
		if (empty($user) OR empty($key))
		{
			throw new Exception('No user Found to Activate');
		}

		// Set user to activated
		$user->status = 1;

		// Update the user, children and subscriber
		$this->_repository_user->update($user);

		if ($user->newsletter == 1)
		{
			$this->_newsletter_subscribe->subscribe_as_user($user, 'all', $source);
		}

		if ($newsletter_group == 1)
		{
			$this->_newsletter_subscribe->subscribe_as_user($user, 'all', $source, $newsletter_group, $mailchimp_group);
		}

		if ( ! empty($ref))
		{
			$this->_newsletter_subscribe->subscribe_as_user($user, 'all', '', '', '', $ref);
		}

		return $user;
	}
}