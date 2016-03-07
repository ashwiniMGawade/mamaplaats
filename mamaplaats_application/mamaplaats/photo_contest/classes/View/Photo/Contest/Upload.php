<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Upload extends View_Photo_Contest {

	/**
	 * @var string The page title
	 */
	public $title;

	/**
	 * @var Model_WP_User
	 */
	protected $_user;

	/**
	 * @param Model_Photo_Contest $contest
	 * @param Model_WP_User $user
	 */
	public function __construct(Model_Photo_Contest $contest, Model_WP_User $user)
	{
		$this->_user 						= $user;
		$this->title 						= $contest->title;
		$this->page_body 					= nl2br(htmlspecialchars($contest->page_body));
		$this->banner_code 					= $contest->banner_code;
		
		parent::__construct();
	}

	/**
	 * @return bool Return if the user is logged in
	 */
	public function logged_in()
	{
		if ($this->_user->ID)
		{
			return TRUE;
		}

		return FALSE;
	}
}