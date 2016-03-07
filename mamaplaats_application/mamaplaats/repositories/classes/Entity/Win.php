<?php

class Entity_Win extends Entity
{
	use Entity_Helper_Seo, Entity_Helper_Excerpt;

	public $id;
	public $author_id;
	public $slug;
	public $title;
	public $excerpt;
	public $content;
	public $password = '';
	public $status = 'draft';
	public $type = 'post';
	public $ping_status	= 'closed';
	public $to_ping	= '';
	public $comment_status = 'open';
	public $comment_count = 0;
	public $view_count = 0;
	public $created;
	public $created_gmt;
	public $modified;
	public $modified_gmt;

	public $end_date;
	public $winners = array();
}