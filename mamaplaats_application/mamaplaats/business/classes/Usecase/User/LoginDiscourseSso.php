<?php

class Usecase_User_LoginDiscourseSso {

	/**
	 * @var DiscourseSso Factory
	 */
	private $_discourse_sso;

	public function __construct($discourse_sso)
	{
		$this->_discourse_sso = $discourse_sso;
	}

	public function execute(Entity_User $user, $access_keys)
	{
		if(empty($access_keys['sso']) OR empty($access_keys['sig']))
		{
			throw new Exception('Invalid Authentication');
		}

		$payload = $access_keys['sso'];

		$this->_discourse_sso->setSecret();

		// validate the payload
		if ( ! ($this->_discourse_sso->validatePayload($payload, $access_keys['sig'])))
		{
			throw new Exception('Forbidden, Bad SSO request');
			/*header("HTTP/1.1 403 Forbidden");
			echo("Bad SSO request");
			die();*/
		}

		$nonce = $this->_discourse_sso->getNonce($payload);

		$userId = $user->id;
		$userEmail = $user->email;
		$extraParameters = array(
			'username' => $user->username,
			'name' => $user->first_name.' '.$user->last_name,
			'profile_image_ext' => $user->profile_image_ext
		);

		return $this->_discourse_sso->getSignInString($nonce, $userId, $userEmail, $extraParameters);
	}
}