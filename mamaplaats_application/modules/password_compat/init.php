<?php defined('SYSPATH') or die('No direct script access.');

$password_compat = Kohana::find_file('vendor', 'password_compat/lib/password', 'php');

// Check for password_compat library or PHP 5.5 password_* functions.
if ($password_compat === FALSE AND ! defined('PASSWORD_DEFAULT'))
{
	throw new Kohana_Exception("Could not find password_* functions. Have you checked out password_compat submodule?");
}

require($password_compat);