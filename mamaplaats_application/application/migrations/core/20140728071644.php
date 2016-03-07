<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140728071644 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, '
			CREATE TABLE IF NOT EXISTS `signup_images` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`title` varchar(255) NOT NULL,
			`image` text NOT NULL,
			`slug` varchar(255) NOT NULL,
			PRIMARY KEY (`id`))
			');
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		// $db->query(NULL, 'DROP TABLE ... ');
	}

}
