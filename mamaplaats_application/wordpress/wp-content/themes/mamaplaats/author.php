<?php
// Undo the escaping that WordPress does to superglobals
$backup = array(
	'get' => $_GET,
	'post' => $_POST,
	'cookie' => $_COOKIE,
	'server' => $_SERVER,
);

$_GET = stripslashes_deep($_GET);
$_POST = stripslashes_deep($_POST);
$_COOKIE = stripslashes_deep($_COOKIE);
$_SERVER = stripslashes_deep($_SERVER);

echo Request::factory()->execute()->send_headers()->body();

// Restore the superglobals to the way WordPress wants them
$_GET = $backup['get'];
$_POST = $backup['post'];
$_COOKIE = $backup['cookie'];
$_SERVER = $backup['server'];