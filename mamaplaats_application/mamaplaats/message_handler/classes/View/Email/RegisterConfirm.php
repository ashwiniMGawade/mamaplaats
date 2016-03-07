<?php defined('SYSPATH') or die('No direct script access.');

class View_Email_RegisterConfirm extends Kostache {

	/**
	 * @var string The page title
	 */
	public $subject = '';

	/**
	 * @var Entity_User
	 */
	private $_user;

	/**
	 * @var string
	 */
	private $_source;

	/**
	 * @var string
	 */
	private $_ref;

	public function __construct(array $parameters)
	{
		$this->_user    = $parameters['user'];
		$this->_source  = $parameters['source'];
		$this->subject  = $parameters['subject'];
		$this->_ref     = $parameters['ref'];
	}

	public function content()
	{
		$params = array(
			'user_id' => $this->_user->id,
			'key' => $this->_user->activation_key,
		);

		if ( ! empty($this->_source))
		{
			$params['source'] = $this->_source;
		}

		if ( ! empty($this->_ref))
		{
			$params['ref'] = $this->_ref;
		}

		if (isset($this->_user->newsletter_group))
		{
			$params['newsletter_group'] = base64_encode($this->_user->newsletter_group);
		}

		$user = $this->_user;
		$user->activation_url = Route::url('guest_activate').'?'.http_build_query($params);

		return $user;
	}
}