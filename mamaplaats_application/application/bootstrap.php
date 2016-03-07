<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Set the default time zone.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/timezones
 */
date_default_timezone_set('Europe/Amsterdam');

/**
 * Set the default locale.
 *
 * @see  http://kohanaframework.org/guide/using.configuration
 * @see  http://php.net/setlocale
 */
setlocale(LC_ALL, 'nl_NL.utf-8');

// Only switch the digit handling
setlocale(LC_NUMERIC, 'en_US.utf-8');

/**
 * Enable the Kohana auto-loader.
 *
 * @see  http://kohanaframework.org/guide/using.autoloading
 * @see  http://php.net/spl_autoload_register
 */
spl_autoload_register(array('Kohana', 'auto_load'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @see  http://php.net/spl_autoload_call
 * @see  http://php.net/manual/var.configuration.php#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

// -- Configuration and initialization -----------------------------------------

/**
 * Set the default language
 */
I18n::lang('nl-nl');

/**
 * Set cookie salt
 */
Cookie::$salt = 'n8{-5qWW&UNf?M{XH;EK!KthEekmb~}V,*8i s8yV2w?*ITV2rzfvQFhF4JwKX}{';

/**
 * Set Kohana::$environment if a 'KOHANA_ENV' environment variable has been supplied.
 *
 * Note: If you supply an invalid environment name, a PHP warning will be thrown
 * saying "Couldn't find constant Kohana::<INVALID_ENV_NAME>"
 */
if (getenv('KOHANA_ENV') !== FALSE)
{
	Kohana::$environment = constant('Kohana::'.strtoupper(getenv('KOHANA_ENV')));
}

Kohana::$environment = Kohana::DEVELOPMENT;

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 */

Kohana::init(array(
	'base_url' 		=> 'http://dev.mamaplaats.nl/',
	'index_file'	=> FALSE,
	'profile' 		=> FALSE,
	'caching' 		=> FALSE,
));

/**
 * Attach the file write to logging. Multiple writers are supported.
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));

/**
 * Attach a file reader to config. Multiple readers are supported.
 */
Kohana::$config->attach(new Config_File);

/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules(array(
	'business'		=> MPPATH.'business',
	'repositories'	=> MPPATH.'repositories',
	'api'			=> MPPATH.'api',
	'admin'			=> MPPATH.'admin',
	'media'			=> MPPATH.'media',
   // 'aws_media'		=> MPPATH.'aws_media',
	'message_handler' => MPPATH.'message_handler',
	'photo_contest'	=> MPPATH.'photo_contest',
	'coupon'		=> MPPATH.'coupon',
	'core'			=> MPPATH.'core',
	'akismet' 		=> MODPATH.'akismet',
	'cache' 		=> MODPATH.'cache',
	'email' 		=> MODPATH.'email',
	'image' 		=> MODPATH.'image',
	'kostache' 		=> MODPATH.'kostache',
	'database' 		=> MODPATH.'database',
	'auth' 			=> MODPATH.'auth',
	'automodeler' 	=> MODPATH.'automodeler',
	'minion'   		=> MODPATH.'minion',
	'minion-migrations' => MODPATH.'minion-migrations',
	'captcha'		=> MODPATH.'captcha',
	'pagination'	=> MODPATH.'kohana-pagination-module',
	'password_compat' => MODPATH.'password_compat',
	'purifier' 		=> MODPATH.'purifier',
	'airbrake' 		=> MODPATH.'airbrake',
    //'flysystem'		=> MODPATH.'flysystem',		// File Storage Library
	'discourse' 	=> MODPATH.'discourse-sso',
));
