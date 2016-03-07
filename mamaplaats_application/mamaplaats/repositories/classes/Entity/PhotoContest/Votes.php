<?php

class Entity_PhotoContest_Votes extends Entity {
	public $id;
	public $photo_contest_entry_id;
	public $firstname;
	public $lastname;
	public $email;
	public $newsletter;
	public $ip_address;
	public $browser;
	public $status;
	public $confirmation_hash;
}