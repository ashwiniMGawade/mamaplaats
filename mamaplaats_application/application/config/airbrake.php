<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Airbrake notifier configuration.
 *
 * @package   Airbrake
 * @category  Configuration
 */
return array(

	// Set your API key
	'api_key' => 'a0037217dcd75f38f2976bcfc22b71fc',

	// Set to `TRUE` to use a secure connection
	'secure'  => TRUE,

	// Timeouts in seconds
	'http_open_timeout' => 2,
	'http_read_timeout' => 5,

	// Proxy settings
	'proxy_host' => NULL,
	'proxy_user' => NULL,
	'proxy_pass' => NULL,

	// Removes sensitive form parameters, such as passwords and credit card numbers
	'params_filters' => array(
		'password',
		'password_confirmation',
		'password_repeat',
	),

	// Environments which should NOT send notices to Airbrake
	'development_environments' => array(
		'development',
		'testing',
	),

	// Removes sensitive environment variables from `$_SERVER` and `$_ENV`.
	'cgi_data_filters' => array(
	// 	'DATABASE_URL',
	),

);