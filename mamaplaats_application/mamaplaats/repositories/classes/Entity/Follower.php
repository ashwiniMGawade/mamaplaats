<?php

class Entity_Follower extends Entity
{
	public $id;
	public $follower_id;
	public $following_id;

	public $follower_user = array();
	public $following_user = array();
}