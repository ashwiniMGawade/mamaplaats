<?php

class Entity_PhotoContest_Entries extends Entity {
	public $id;
	public $photo_contest_id;
	public $wp_user_id;
	public $title;
	public $description;
	public $photo_url;
	public $amount_votes;
	public $status;
	public $last_vote;
	public $upload_date;
}