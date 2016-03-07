<?php

class Validate_Exception extends Exception
{
	public $errors;
	public $object;

	public function __construct($title, $errors = '', $object = NULL)
	{
		parent::__construct($title);
		$this->errors = $errors;
		$this->object = $object;
	}
}