<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Mamaplaats Auth driver. Compatible with Wordpress Passwords
 */
class Auth_MP extends Auth {

	/**
	 * Checks if a session is active.
	 *
	 * @param mixed $role Role name string, role ORM object, or array with role names
	 * @return bool
	 */
	public function logged_in($role = NULL)
	{
		// Get the user from the session
		$user = $this->get_user();

		if (is_object($user) AND $user instanceof Entity_User AND $user->id)
		{
			// Everything is okay so far
			return TRUE;
		}

		return FALSE;
	}

	/**
	 * Logs a user in.
	 *
	 * @param string $username Username string or User object
	 * @param string $password Password
	 * @param bool $remember Create cookie to remember the user
	 * @return bool
	 * @throws Auth_Exception
	 */
	protected function _login($username, $password, $remember)
	{
		$user = $username;
		if ( ! is_object($user))
		{
			// Load the user
			$user = Factory_Repository::user()->load_object(array(array('username', '=', $username)));

			if (empty($user))
			{
				$user = Factory_Repository::user()->load_object(array(array('email', '=', $username)));
			}
		}

		// If user is will empty stop
		if (empty($user))
		{
			return FALSE;
		}

		if ($user->status == 0)
		{
			throw new Auth_Exception('account not activated');
		}

		$password_hash = new PasswordHash(8, TRUE);

		// If the passwords match, perform a login
		if ($password_hash->CheckPassword($password, $user->password))
		{
			if ($remember === TRUE)
			{
				// Create a new autologin token
				$token = new Entity_User_Token;
				$token->user_id 	= $user->id;
				$token->type 		= 'default';
				$token->token 		= sha1(uniqid(Text::random('alnum', 32), TRUE));
				$token->user_agent 	= sha1(Request::$user_agent);
				$token->expires 	= date('Y-m-d H:i:s', time() + $this->_config['lifetime']);

				$token = Factory_Repository::user_token()->create($token);

				// Set the autologin cookie
				Cookie::set('authautologin', $token->token, $this->_config['lifetime']);
			}

			// Finish the login
			$this->complete_login($user);

			return TRUE;
		}

		// Login failed
		return FALSE;
	}

	/**
	 * Forces a user to be logged in, without specifying a password.
	 *
	 * @param mixed $user Username string, or user ORM object
	 * @return bool
	 */
	public function force_login($user)
	{
		if ( ! is_object($user))
		{
			$user = Factory_Repository::user()->load_object(array(array('email', '=', $user)));
		}

		// Mark the session as forced, to prevent users from changing account information
		$this->_session->set('auth_forced', TRUE);

		// Run the standard completion
		$this->complete_login($user);
	}

	/**
	 * Logs a user in, based on the authautologin cookie.
	 *
	 * @return  mixed
	 */
	public function auto_login()
	{
		if ($token = Cookie::get('authautologin'))
		{
			// Load the token and user
			$token = Factory_Repository::user_token()->load_object(array(array('token', '=', $token)));

			if ( ! empty($token) AND $token->expires > date('Y-m-d H:i:s') AND $token->user_agent === sha1(Request::$user_agent))
			{
				// Save the token to create a new unique token
				$token->token = sha1(uniqid(Text::random('alnum', 32), TRUE));
				$token = Factory_Repository::user_token()->update($token);

				// Set the new token
				Cookie::set('authautologin', $token->token, strtotime($token->expires) - time());

				// Load the user
				$user = Factory_Repository::user()->load_object(array(array('id', '=', $token->user_id)));

				// Complete the login with the found data
				$this->complete_login($user);

				// Automatic login was successful
				return $user;
			}
			elseif ( ! empty($token))
			{
				// Token is invalid
				Factory_Repository::user_token()->delete($token);
				$this->_clean_expired_tokens();
			}
		}

		return FALSE;
	}

	public function reload_session()
	{
		$user = $this->get_user();
		$user = Factory_Repository::user()->load_object(array(array('id', '=', $user->id)));

		// Complete the login with the found data
		$this->complete_login($user);
	}

	/**
	 * Gets the currently logged in user from the session (with auto_login check).
	 * Returns FALSE if no user is currently logged in.
	 *
	 * @param mixed $default Not used
	 * @return mixed
	 */
	public function get_user($default = NULL)
	{
		$user = parent::get_user();

		if ($user === FALSE)
		{
			// check for "remembered" login
			$user = $this->auto_login();
		}

		return $user;
	}

	/**
	 * Log a user out and remove any autologin cookies.
	 *
	 * @param bool $destroy Completely destroy the session
	 * @param bool $logout_all Remove all tokens for user
	 * @return bool
	 */
	public function logout($destroy = FALSE, $logout_all = FALSE)
	{
		// Set by force_login()
		$this->_session->delete('auth_forced');

		if ($token = Cookie::get('authautologin'))
		{
			// Delete the autologin cookie to prevent re-login
			Cookie::delete('authautologin');

			// Clear the autologin token from the database
			$token_repo = Factory_Repository::user_token();
			$token 		= $token_repo->load_object(array(array('token', '=', $token)));

			if ( ! empty($token) AND $logout_all)
			{
				foreach ($token_repo->load_set(array(array('user_id', '=', $token->user_id))) as $token)
				{
					$token_repo->delete($token);
				}
			}
			elseif ( ! empty($token))
			{
				$token_repo->delete($token);
			}
		}

		return parent::logout($destroy);
	}

	/**
	 * Get the stored password for a username.
	 *
	 * @param mixed $user Username string, or user object
	 * @return string
	 */
	public function password($user)
	{
		if ( ! is_object($user))
		{
			$user = Factory_Repository::user()->load_object(array(array('username', '=', $user)));
		}

		return $user->password;
	}

	/**
	 * Compare password with original (hashed). Works for current (logged in) user
	 *
	 * @param   string  $password
	 * @return  boolean
	 */
	public function check_password($password)
	{
		$user = $this->get_user();

		if ($user === FALSE)
		{
			// nothing to compare
			return FALSE;
		}

		$password_hash = new PasswordHash(8, TRUE);
		return $password_hash->CheckPassword($password, $user->password);
	}

	private function _clean_expired_tokens()
	{
		$expired_tokens = Factory_Repository::user_token()->load_set(array(array('expires', '<', date('Y-m-d H:i:s'))));
		foreach ($expired_tokens as $expired_token)
		{
			Factory_Repository::user_token()->delete($expired_token);
		}
	}
}

