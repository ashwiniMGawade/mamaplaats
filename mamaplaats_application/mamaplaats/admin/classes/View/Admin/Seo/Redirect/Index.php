<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Seo_Redirect_Index {

	use View_Helper_Message;

	private $_redirects;

	public function __construct($redirects, $messages)
	{
		$this->_redirects = $redirects;
		$this->messages = $messages;
	}

	public function redirects()
	{
		return $this->_redirects;
	}
}