<?php defined('SYSPATH') or die('No direct script access.');

class Model_WP_User_Child extends AutoModeler_ORM
{
	protected $_table_name  = 'wp_user_children';

	protected $_data = array(
		'id' 			=> NULL,
		'wp_user_id' 	=> NULL,
		'first_name' 	=> '',
		'gender' 		=> 1,
		'birthdate' 	=> '',
	);

	protected $_rules = array(
		'id' 			=> array(array('digit')),
		'wp_user_id' 	=> array(array('not_empty'), array('digit')),
		'first_name' 	=> array(array('not_empty')),
		'gender' 		=> array(array('not_empty'), array('digit')),
		'birthdate' 	=> array(array('not_empty'), array('date')),
	);
}
