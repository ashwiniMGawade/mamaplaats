<?php

class Auth_Exception extends Exception
{
	public $errors;

	public function __construct($title, $errors = '')
	{
		parent::__construct($title);
		$this->errors = $errors;
	}
}