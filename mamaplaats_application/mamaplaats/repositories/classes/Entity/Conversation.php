<?php

class Entity_Conversation extends Entity
{
	public $id;
	public $author_id;
	public $recipient_id;
	public $author_ip;
	public $created;
	public $content;
	public $unread = 1;
	public $draft;
	public $deleted = 0;
}
