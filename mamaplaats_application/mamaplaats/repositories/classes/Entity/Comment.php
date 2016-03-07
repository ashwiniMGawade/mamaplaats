<?php

class Entity_Comment extends Entity {

	public $id;
	public $post_id;
	public $author_name;
	public $author_email;
	public $author_url = '';
	public $author_ip;
	public $date;
	public $date_gmt;
	public $content;
	public $karma = 0;
	public $approved = 1;
	public $agent = '';
	public $type = '';
	public $parent_id = 0;
	public $user_id = 0;
	//public $children;
}