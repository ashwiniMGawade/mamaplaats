<?php

class Entity_Coupon_Offer extends Entity {

	public $id;
	public $coupon_shop_id;
	public $coupon_category_id;
	public $title;
	public $description;
	public $url;
	public $coupon_code;
	public $start_date;
	public $end_date;
	public $created;
	public $modified;
	public $type;
	public $click_outs = 0;
	public $external_id;
}