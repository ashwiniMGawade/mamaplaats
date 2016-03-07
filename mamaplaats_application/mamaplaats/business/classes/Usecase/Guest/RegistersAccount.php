<?php

class Usecase_Guest_RegistersAccount {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var PasswordHash
	 */
	private $_password_hash;

	/**
	 * @var Validate_User
	 */
	private $_validate_user;

	/**
	 * @var User_ProfileHelper
	 */
	private $_profile_helper;

	/**
	 * @var Message
	 */
	private $_message;

	/**
	 * @var Repository_Browser
	 */
	private $_repository_browser;

	/**
	 * @var Session
	 */
	private $_session;

	public function __construct($repository_user, $password_hash, $validate_user, $profile_helper, $message, $repository_browser, $session)
	{
		// Set the complexity and method for the password hash
		$password_hash->PasswordHash(8, TRUE);

		$this->_repository_user = $repository_user;
		$this->_password_hash	= $password_hash;
		$this->_validate_user	= $validate_user;
		$this->_profile_helper	= $profile_helper;
		$this->_message 		= $message;
		$this->_repository_browser = $repository_browser;
		$this->_session = $session;
	}

	public function execute($fields, $source, $ref)
	{

		if ($this->_profile_helper->check_if_email_is_already_present($fields['email']))
		{
			throw new Validate_Exception('email in use', array('Email is al in gebruik, vraag uw wachtwoord opnieuw aan.'));
		}

		$fields = array_merge($fields, $this->_profile_helper->split_middle_and_last_name($fields['last_name']));

		// Else Create this user
		$user = new Entity_User;
		$user->password 			= $fields['password'];
		$user->email 				= $fields['email'];
		$user->first_name 			= $fields['first_name'];
		$user->middle_name 			= $fields['middle_name'];
		$user->last_name 			= $fields['last_name'];
		$user->phone_number			= ( ! empty($fields['phone_number'])) ? $fields['phone_number'] : NULL;
		$user->display_name 		= $fields['display_name'];
		$user->username 			= $fields['display_name'];
		$user->birthdate 			= $fields['birthdate'];
		$user->gender 				= $fields['gender'];
		$user->tos					= ( ! empty($fields['tos'])) ? 1 : 0;
		$user->newsletter			= ( ! empty($fields['tos'])) ? 1 : 0;
		$user->registration_ip		= $fields['registration_ip'];
		$user->registration_date	= date('Y-m-d H:i:s');

		if (isset($fields['newsletter_group']))
		{
			$user->newsletter_group	= ( ! empty($fields['newsletter_group'])) ? 1 : 0;
		}

		$user->activation_key 		= Text::random(NULL, 20);
		$user->slug 				= $this->_profile_helper->generate_unique_slug($user->full_name());

		if ($this->_profile_helper->check_if_username_is_already_present($user->display_name))
		{
			throw new Validate_Exception('username in use', array('Username is al in gebruik.'));
		}

		$this->_validate_user($user);

		// Hash the password
		$user->password = $this->_password_hash->HashPassword($user->password);
		$user = $this->_repository_user->create($user);

		// Set newly user id into the browser info table to redirection purposes to wither review or win page
		$session_user_browser_id = $this->_session->get('user_browser_id');
		if (!empty($session_user_browser_id))
		{
			$browser = $this->_repository_browser->load_object(array(array('id', '=', $session_user_browser_id)));
			$browser->user_id = $user->id;
			$this->_repository_browser->update($browser);
			$this->_session->delete('user_browser_id');
		}

		// Send the verification email
		$this->_message->send(
			'RegisterConfirm',
			array(
				'user'      => $user,
				'source'    => $source,
				'ref'       => $ref,
				'subject'   => 'Mamaplaats, verifieer je account',
				'receiver'  => $user->email,
				'sender'    => 'info@mamaplaats.nl',
			)
		);

		return $user;
	}

	public function _validate_user(Entity_User $user)
	{
		$this->_validate_user->load($user->as_array());
		$this->_validate_user->default_rules();

		if ($this->_validate_user->check() !== TRUE)
		{
			$errors = $this->_validate_user->errors();

			if( ! empty($errors['newsletter_group']))
			{
				$errors['newsletter_group'] = 'Je moet de Campagne Voorwaarden accepteren';
			}

			Throw new Validate_Exception('This user is invalid !', $errors);
		}
	}
}