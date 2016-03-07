<?php

defined('SYSPATH') or die('No direct script access.');

class View_Campaign_Newsletter_Register extends View_Layout {

	public $title = 'Registreer';

	/**
	 * @var array
	 */
	private $_user_array = array('children' => array(), 'gender' => '');

	public $errors = array();
	public $success = FALSE;

	public function __construct($user_array)
	{
		$this->render_layout = FALSE;
		$this->_user_array = array_merge($this->_user_array, $user_array);

		// Unset pregnancy date when older than 10 months
		if ($this->_user_array['pregnancy_due_date'] < date('Y-m-d'))
		{
			$this->_user_array['pregnancy_due_date'] = '';
		}

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
		return $this->_user_array;
	}

	public function children()
	{
		return json_encode($this->_user_array['children']);
	}

	public function is_pregnant()
	{
		$due_date = $this->_user_array['pregnancy_due_date'];
		$is_pregnant = ( ! empty($due_date)) ? 1 : 0;

		return $this->_select_list(array(0 => 'Nee', 1 => 'Ja'), $is_pregnant);
	}

	public function genders()
	{
		$genders = $this->_select_info('genders');
		return $this->_select_list($genders, $this->_user_array['gender']);
	}

	public function child_genders()
	{
		$child_genders = $this->_select_info('child_genders');
		return $this->_select_list($child_genders);
	}
}