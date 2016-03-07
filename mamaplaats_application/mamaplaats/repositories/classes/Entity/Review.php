<?php

class Entity_Review extends Entity {

	public $id;
	public $review_product_id;
	public $user_id;
	public $title = '';
	public $slug = '';
	public $meta_title = '';
	public $meta_description = '';
	public $information = '';
	public $introduction = '';
	public $review = '';
	public $final_judgement = '';
	public $rating_overal_impression = 0.0;
	public $rating_price_quality = 0.0;
	public $rating_design = 0.0;
	public $rating_child_friendly = 0.0;
	public $rating_safety = 0.0;
	public $rating_overal = 0.0;
	public $will_recommend = 1;
	public $answer_phone = '';
	public $answer_address = '';
	public $answer_zip = '';
	public $answer_place = '';
	public $answer_reason = '';
	public $answer_extra1 = '';
	public $answer_extra2 = '';
	public $answer_extra3 = '';
	public $status = 'waiting';
	public $comment_count = 0;
	public $created = '';
	public $published = '';
	public $phone_access = '';

	public $sections = array();
	public $ratings = array();
	public $remarks = array();
}
