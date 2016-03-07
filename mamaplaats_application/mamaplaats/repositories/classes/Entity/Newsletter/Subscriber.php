<?php

class Entity_Newsletter_Subscriber extends Entity
{
	public $id;
	public $email;
	public $first_name;
	public $middle_name;
	public $last_name;
	public $gender;
	public $birthdate;
	public $pregnancy_due_date;
	public $blog_count;

	public $children = array();

	public $sources = array('Mamaplaats');
	public $newsletters = array('Win', 'Voordeelclub', 'Blog / Advies', 'Partner Aanbieding', 'Testpanels');
	public $status;
	public $newsletter;
	public $newsletter_group;
	public $mailchimp_group;
}