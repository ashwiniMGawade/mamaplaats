<?php

class Usecase_Guest_SubscribesForNewsletter {

	/**
	 * @var Newsletter_Subscribe
	 */
	private $_newsletter_subscribe;

	public function __construct($newsletter_subscribe)
	{
		$this->_newsletter_subscribe = $newsletter_subscribe;
	}

	public function execute(array $fields)
	{
		$this->_newsletter_subscribe->subscribe_as_guest(Arr::get($fields, 'email'), 'all');
	}
}