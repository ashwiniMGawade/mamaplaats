<?php

class Entity_User_Token extends Entity
{
	public $id;
	public $user_id;
	public $user_agent;
	public $token;
	public $type;
	public $created;
	public $expires;
}