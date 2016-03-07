<?php

defined('SYSPATH') or die('No direct script access.');

class View_User_Register extends View_Bootstrap {

	public $title = 'Registreer';

	/**
	 * @var Model_Wp_User
	 */
	private $user;

	/**
	 * @var Model_Registration_Page
	 */
	private $registration_page;

	public $errors = array();

	public function __construct($user, $registration_page)
	{
		$this->user = $user;
		$this->registration_page = $registration_page;

		$this->title = $this->title.' '.$registration_page['title'];

		parent::__construct();
	}

	public function has_errors()
	{
		$errors = array();
		foreach ($this->errors as $error)
		{
			$errors[] = array('error' => $error);
		}

		return ( ! empty($errors)) ? array('errors' => $errors) : FALSE;
	}

	public function user()
	{
		return $this->user;
	}

	public function children()
	{
		$children = array();
		foreach($this->user->get_children() as $child)
		{
			$children[] = $child->as_array();
		}

		return json_encode($children);
	}

	public function genders()
	{
		$genders = $this->_select_info('genders');
		return $this->_select_list($genders, $this->user->gender);
	}

	public function child_genders()
	{
		$child_genders = $this->_select_info('child_genders');
		return $this->_select_list($child_genders);
	}

	public function registration_page()
	{
		return $this->registration_page;
	}
}