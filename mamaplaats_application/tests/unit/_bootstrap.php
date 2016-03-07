<?php

if ( ! defined('EXT'))
{
	define('EXT', '.php');

	error_reporting(E_ALL & ~E_DEPRECATED);

	define('DOCROOT', realpath(dirname(__FILE__).'/../../').'/');
	define('MPPATH', realpath('mamaplaats').'/');
	define('APPPATH', realpath('application').'/');
	define('MODPATH', realpath('modules').'/');
	define('SYSPATH', realpath('system').'/');

	// Bootstrap the application
	require APPPATH.'bootstrap.testing'.EXT;
}