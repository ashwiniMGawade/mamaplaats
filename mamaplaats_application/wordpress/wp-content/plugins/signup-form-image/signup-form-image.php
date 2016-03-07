<?php
/*
Plugin Name: Signup Form Image
Plugin URI: http://www.exmple.net
Description: Plugin for storing the signup images to the databse
Author: test
Version: 1.0
Author URI: http://www.exmple.net
*/

function redirect($toUrl)
{
	echo '<script language="javascript"> window.location = "'.$toUrl.'";</script>';
}

function menu()
{
	add_menu_page( 'Banners', 'Subscription Page', 10, 'banner', 'banner_form');
	add_submenu_page('banner', 'manage banners', ' Manage Subscription Page', 'manage_options', "manage_banners", 'manage_banners');
}

add_action( 'admin_menu', 'menu');

include "manage_banners.php";
include "banners.php";
wp_enqueue_style( 'build-buy', get_template_directory_uri().'/css/style.css' );
?>