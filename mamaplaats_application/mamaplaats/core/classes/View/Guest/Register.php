<?php defined('SYSPATH') or die('No direct script access.');

class View_Guest_Register {

	use View_Helper_Select, View_Helper_Message, View_Helper_Time;

	public $title = 'Registreer je bij Mamaplaats';

	private $_user = array('gender' => 2, 'birthdate' => array('year' => ''), 'newsletter' => 0, 'newsletter_group' => 0);
	private $_left_panel_image;
	private $_select_info;
	private $_slug;
	private $_opt_text;

	public function __construct($user, $left_panel_image, $select_info, $messages)
	{
		$this->_user = array_merge($this->_user, $user);
		$this->_left_panel_image = $left_panel_image;
		$this->_select_info = $select_info;
		$this->_slug = false;
		if (isset($this->_left_panel_image->double_opt) AND $this->_left_panel_image->double_opt == 1)
		{
			$this->_slug = true;
			$this->_opt_text    =   $this->_left_panel_image->double_opt_text;
		}

		$this->messages = $messages;
	}

	public function success()
	{
		return ( ! empty($this->messages['type']) AND $this->messages['type'] == 'success');
	}

	public function user()
	{
		return $this->_user;
	}

	public function birthdate_years()
	{
		$birthdate = $this->_user['birthdate'];
		$year_list = $this->get_year_range(120);

		return $this->select_list($year_list, $birthdate['year']);
	}

	public function genders()
	{
		return $this->select_list($this->_select_info['genders'], $this->_user['gender']);
	}

	public function page_title()
	{
		if ( ! empty($this->_left_panel_image->page_title))
		{
			return $this->_left_panel_image->page_title;
		}

		return 'Registreer je bij mamaplaats';
	}

	public function left_panel_image()
	{
		if (isset($this->_left_panel_image->image))
		{
			return $this->_left_panel_image->image;
		}

		return '';
	}

	public function slug()
	{
		return $this->_slug;
	}

	public function opt_text()
	{
		return $this->_opt_text;
	}

	public function phone_number_field()
	{
		return array(
			'display' => ( ! empty($this->_left_panel_image->phone_number)) ? true : false,
			'text' => ( ! empty($this->_left_panel_image->phone_number_text)) ? $this->_left_panel_image->phone_number_text : false
		);
	}
}