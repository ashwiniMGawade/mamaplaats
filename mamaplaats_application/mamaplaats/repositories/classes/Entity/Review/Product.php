<?php

class Entity_Review_Product extends Entity {

	public $id;
	public $user_id;
	public $category_id;
	public $title = '';
	public $slug = '';
	public $meta_title = '';
	public $meta_description = '';
	public $image_url = '';
	public $description = '';
	public $media_short = '';
	public $conclusion = '';
	public $question_extra1 = '';
	public $question_extra2 = '';
	public $question_extra3 = '';
	public $application_start_date;
	public $application_end_date;
	public $status = 'invisible';
	public $created;
	public $modified;
	public $phone_access_field = '';

	public $sections = array();
	public $ratings = array();
	public $remarks = array();
}