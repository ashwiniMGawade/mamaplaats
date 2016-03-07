<?php

class User_ProfileHelper {

	/**
	 * @var Repository_User
	 */
	private $_repository_user;

	public function __construct($repository_user)
	{
		$this->_repository_user = $repository_user;
	}

	public function check_if_email_is_already_present($email, $ignore_user_id = NULL)
	{
		$rules = array(array('email', '=', $email));
		if ( ! empty($ignore_user_id))
		{
			$rules[] = array('id', '!=', $ignore_user_id);
		}

		$exists = $this->_repository_user->load_object($rules);

		return ( ! empty($exists));
	}

	public function check_if_username_is_already_present($username, $ignore_user_id = NULL)
	{
		if (empty($username))
		{
			return FALSE;
		}

		$rules = array(array('display_name', '=', $username));
		if ( ! empty($ignore_user_id))
		{
			$rules[] = array('id', '!=', $ignore_user_id);
		}

		$exists = $this->_repository_user->load_object($rules);

		return ( ! empty($exists));
	}

	public function split_middle_and_last_name($last_name)
	{
		$pos = strpos($last_name, ' ');
		if ($pos !== FALSE)
		{
			return array(
				'middle_name' 	=> trim(substr($last_name, 0, $pos + 1)),
				'last_name' 	=> trim(substr($last_name, $pos)),
			);
		}

		// There is no middle name
		return array('middle_name' => '', 'last_name' => $last_name);
	}

	public function generate_unique_slug($username, $ignore_user_id = NULL)
	{
		$exists = 1;
		$affix = 0;
		while ( ! empty($exists))
		{
			$slug 	= URL::title($username);
			$slug 	= ($affix === 0) ? $slug : $slug.$affix;
			$exists = $this->_check_if_slug_exists_in_db($slug, $ignore_user_id);

			$affix++;
		}

		return $slug;
	}

	private function _check_if_slug_exists_in_db($slug, $ignore_user_id = NULL)
	{
		$rules = array(array('slug', '=', $slug));
		if ( ! empty($ignore_user_id))
		{
			$rules[] = array('id', '!=', $ignore_user_id);
		}

		return $this->_repository_user->load_object($rules);
	}
}