<?php

class Usecase_Guest_ResetsPassword {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Message
	 */
	private $_message;

	public function __construct($repository_user, $message)
	{
		$this->_repository_user = $repository_user;
		$this->_message = $message;
	}

	public function execute($user_info)
	{
		$user = $this->_repository_user->load_object(array(array('email', '=', $user_info)));
		if (empty($user_info) OR empty($user))
		{
			throw new Exception('No user found with this information');
		}

		// Reset the password for the user
		$user = $this->_generate_activation_key_for_user($user);

		$this->_message->send(
			'PasswordReset',
			array(
				'user' 		=> $user,
				'subject' 	=> 'Mamaplaats, Wachtwoord reset',
				'receiver'	=> $user->email,
				'sender'	=> 'info@mamaplaats.nl',
			)
		);
	}

	private function _generate_activation_key_for_user(Entity_User $user)
	{
		$user->activation_key = Text::random(NULL, 20);
		$this->_repository_user->update($user);

		return $user;
	}
}