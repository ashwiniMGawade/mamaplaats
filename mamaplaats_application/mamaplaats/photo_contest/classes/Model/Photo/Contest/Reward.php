<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The Photo Contest Reward Model that contact the database
 *
 * @property $id
 * @property $photo_contest_id
 * @property $title
 * @property $menu_title
 * @property $description
 * @property $photo_url
 */
class Model_Photo_Contest_Reward extends AutoModeler_ORM
{
	protected $_table_name  = 'photo_contest_rewards';

	protected $_belongs_to = array('photo_contest');

	protected $_data = array(
		'id' 						=> NULL,
		'photo_contest_id' 			=> NULL,
		'title' 					=> '',
		'menu_title' 				=> '',
		'description' 				=> '',
		'photo_url' 				=> '',
		'winner' 					=> '',
	);

	protected $_rules = array(
		'id'						=> array(array('digit')),
		'photo_contest_id'			=> array(array('digit')),
		'title'						=> array(array('not_empty')),
		'menu_title'				=> array(array('not_empty')),
		'description'				=> array(array('not_empty')),
	);
}
