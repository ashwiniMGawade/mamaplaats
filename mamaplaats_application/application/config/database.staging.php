<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	'default' => array
	(
		'type'       => 'MySQL',
        'connection' => array(
            'hostname'   => '127.0.0.1',
            'database'   => 'mamaplaats_staging',
            'username'   => 'webdev',
            'password'   => 'aip2Gei1ui5u',
            'persistent' => FALSE,
        ),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => FALSE,
	),
);
