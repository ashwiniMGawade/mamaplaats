<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_User_List {

	public function __construct($users, $query)
	{
		$this->_users = $users;
		$this->_query = $query;
	}

	public function query()
	{
		return $this->_query;
	}

	public function users()
	{
		return $this->_users;
	}
}