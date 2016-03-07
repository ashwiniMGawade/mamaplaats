<?php

class Entity_Page extends Entity
{
	use Entity_Helper_Seo;

	public $id;
	public $parent_id;
	public $author_id;
	public $thumbnail_id;
	public $slug;
	public $title;
	public $excerpt;
	public $content;
	public $password;
	public $status;
	public $type;
	public $ping_status;
	public $to_ping;
	public $comment_status;
	public $comment_count;
	public $created;
	public $created_gmt;
	public $modified;
	public $modified_gmt;
}