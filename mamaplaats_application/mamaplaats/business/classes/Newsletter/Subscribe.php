<?php

class Newsletter_Subscribe {

	/**
	 * @var Repository_Newsletter_Subscriber
	 */
	private $_repository_subscriber;

	/**
	 * @var Repository_SignUpImage
	 */
	private $_repository_sign_up_image;

	private $_subscriptions = array('Win','Voordeelclub','Blog / Advies','Partner Aanbieding','Testpanels');
	private $_sources = array('Mamaplaats', 'testmoeders', 'cena', 'win', 'Babboe', 'FBadds-C&A-startfeb2015');

	public function __construct($repository_subscriber, $repository_sign_up_image)
	{
		$this->_repository_subscriber = $repository_subscriber;
		$this->_repository_sign_up_image = $repository_sign_up_image;
	}

	public function subscribe_as_guest($email, $subscriptions)
	{
		$subscriber = new Entity_Newsletter_Subscriber;
		$subscriber->email	= $email;
		$subscriber->newsletters = ($subscriptions === 'all') ? $this->_subscriptions : $subscriptions;

		$this->_repository_subscriber->replace($subscriber);
	}

	public function subscribe_as_user(Entity_User $user, $subscriptions, $source = '', $newsletter_group = false, $mailchimp_group = '', $ref = '')
	{
		$subscriber = new Entity_Newsletter_Subscriber;
		$subscriber->email			= $user->email;
		$subscriber->first_name		= $user->first_name;
		$subscriber->middle_name	= $user->middle_name;
		$subscriber->last_name		= $user->last_name;
		$subscriber->phone_number	= $user->phone_number;
		$subscriber->birthdate		= $user->birthdate;
		$subscriber->gender			= $user->gender;
		$subscriber->pregnancy_due_date = $user->pregnancy_due_date;
		$subscriber->children		= $user->children;
		$subscriber->newsletter		= $user->newsletter;
		$subscriber->newsletters	= ($subscriptions === 'all') ? $this->_subscriptions : $subscriptions;

		$list_groups = $this->_repository_sign_up_image->get_group_list();

		if( ! empty($list_groups))
		{
			$this->_sources = array_merge($this->_sources, $list_groups);
		}

		if ( ! empty($source) AND in_array($source, $this->_sources))
		{
			$subscriber->sources = array_merge($subscriber->sources, array($source));
		}

		if ( ! empty($newsletter_group) AND $newsletter_group == true)
		{
			$subscriber->newsletter_group = $newsletter_group;
		}

		if ( ! empty($mailchimp_group) )
		{
			$subscriber->mailchimp_group = $mailchimp_group;
		}

		if ( ! empty($ref))
		{
			$subscriber->sources = array($ref);
		}

		try
		{
			$this->_repository_subscriber->create($subscriber);
		}
		catch (Mailchimp_List_AlreadySubscribed $e)
		{
			$this->_repository_subscriber->replace($subscriber);
		}
	}

	public function update_subscription(Entity_User $user, $subscriptions)
	{
		$subscriber = new Entity_Newsletter_Subscriber;
		$subscriber->email			= $user->email;
		$subscriber->first_name		= $user->first_name;
		$subscriber->middle_name	= $user->middle_name;
		$subscriber->last_name		= $user->last_name;
		$subscriber->birthdate		= $user->birthdate;
		$subscriber->gender			= $user->gender;
		$subscriber->pregnancy_due_date = $user->pregnancy_due_date;
		$subscriber->children		= $user->children;
		$subscriber->newsletters	= ($subscriptions === 'all') ? $this->_subscriptions : $subscriptions;

		$this->_repository_subscriber->update($subscriber);
	}

	public function update_blog_count($authors_with_blog_count)
	{
		foreach ($authors_with_blog_count as $user) {
			$subscriber = new Entity_Newsletter_Subscriber;
			$subscriber->email			= $user->email;
			$subscriber->first_name		= $user->first_name;
			$subscriber->middle_name	= $user->middle_name;
			$subscriber->last_name		= $user->last_name;
			$subscriber->birthdate		= $user->birthdate;
			$subscriber->gender			= $user->gender;
			$subscriber->blog_count 	= $user->blog_count;

			// Get live subscriptions of subscriber 
			$subscriber_information = $this->_repository_subscriber->load_object(array('email' => $subscriber->email));

			if ( ! empty($subscriber_information))
			{
				$subscriber->newsletters = $subscriber_information->newsletters;
			}

			$this->_repository_subscriber->update($subscriber);
		}
	}

	private function _calculate_age($date_of_birth)
	{
		$today = time();
		$date_of_birth = strtotime($date_of_birth);
		$difference = $today - $date_of_birth;
		$age = floor($difference / (60 * 60 * 24));

		return $age;
	}
}