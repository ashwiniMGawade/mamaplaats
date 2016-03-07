<?php

class Usecase_User_UpdatesProfile {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	/**
	 * @var Repository_User_Child
	 */
	private $_repository_child;

	/**
	 * @var PasswordHash
	 */
	private $_password_hash;

	/**
	 * @var Newsletter_Subscribe
	 */
	private $_newsletter_subscribe;

	/**
	 * @var Validate_User
	 */
	private $_validate_user;

	/**
	 * @var Validate_User_Child
	 */
	private $_validate_child;

	/**
	 * @var User_ProfileHelper
	 */
	private $_profile_helper;

	public function __construct(
		$repository_user,
		$repository_child,
		$password_hash,
		$newsletter_subscribe,
		$validate_user,
		$validate_child,
		$profile_helper
	)
	{
		$this->_repository_user 		= $repository_user;
		$this->_repository_child 		= $repository_child;
		$this->_password_hash			= $password_hash;
		$this->_newsletter_subscribe	= $newsletter_subscribe;
		$this->_validate_user 			= $validate_user;
		$this->_validate_child 			= $validate_child;
		$this->_profile_helper 			= $profile_helper;
	}

	public function execute(Entity_User $user, $fields)
	{
		if (isset($fields['new_password']))
		{
			$user->password = $this->validate_password_data($user, $fields);
		}

		if ($this->_profile_helper->check_if_email_is_already_present($user->email, $user->id)) {
			throw new Validate_Exception('email in use', array('Oeps ... jouw email komt vaker voor. Wijzig deze hieronder en klik onderaan om je profiel bij te werken.'));
		}

		if ($this->_profile_helper->check_if_username_is_already_present($user->display_name, $user->id)) {
			throw new Validate_Exception('username in use', array('Oeps ... jouw gebruikersnaam komt vaker voor. Wijzig deze hieronder en klik onderaan om je profiel bij te werken.'));
		}

		// Only Generate a new slug after the username validation
		$user->slug = $this->_profile_helper->generate_unique_slug($user->full_name(), $user->id);


		// Validate the user
		$this->_validate_user($user);

		// Validate the user children
		$this->_validate_children($user->children);

		// Update the user, children and subscriber
		$this->_repository_user->update($user);


		if(isset($user->newsletter_subscription))
		{
			$newsletter_subscribe = $user->newsletter_subscription;

			if($newsletter_subscribe == 1)
			{
				$this->_newsletter_subscribe->subscribe_as_user($user, 'all');
			}
			else
			{
				$this->_newsletter_subscribe->subscribe_as_user($user, '');
			}
		}
	}

	private function validate_password_data($user, $fields)
	{
		$password = Arr::get($fields, 'old_password');
		$new_password = Arr::get($fields, 'new_password');
		$confirm_password = Arr::get($fields, 'confirm_password');

		if (empty($password) OR empty($new_password) OR empty($confirm_password))
		{
			throw new Validate_Exception('Password mismatch', array('Vul alle velden in om het wachtwoord te wijzigen'));
		}

		if ( ! $this->_password_hash->CheckPassword($password, $user->password))
		{
			throw new Validate_Exception('Current password is incorrect', array('Huidige wachtwoord is onjuist'));
		}

		if ($new_password !=  $confirm_password)
		{
			throw new Validate_Exception('Password mismatch', array('Nieuwe wachtwoord in en bevestig dit wachtwoord komt niet overeen'));
		}

		return $this->_password_hash->HashPassword($new_password);
	}

	private function _validate_user(Entity_User $user)
	{
		$this->_validate_user->load($user->as_array());
		$this->_validate_user->default_rules();

		if ($this->_validate_user->check() !== TRUE)
		{
			throw new Validate_Exception('This User is not Valid!', $this->_validate_user->errors());
		}
	}

	private function _validate_children(array $children)
	{
		foreach ($children as $child)
		{
			$this->_validate_child->load($child);
			$this->_validate_child->default_rules();

			if ($this->_validate_child->check() !== TRUE)
			{
				throw new Validate_Exception('This User is not Valid!', $this->_validate_child->errors());
			}
		}
	}
}