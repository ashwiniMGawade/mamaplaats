<?php defined('SYSPATH') or die('No direct script access.');

class View_Email_PasswordReset extends Kostache {

	/**
	 * @var string The page title
	 */
	public $subject = '';

	/**
	 * @var Entity_User
	 */
	private $_user;

	public function __construct(array $parameters)
	{
		$this->_user 	= $parameters['user'];
		$this->subject	= $parameters['subject'];
	}

	public function content()
	{
		return array(
			'first_name' 	=> $this->_user->first_name,
			'user_login' 	=> $this->_user->username,
			'user_id' 		=> $this->_user->id,
			'key' 			=> $this->_user->activation_key,
		);
	}
}