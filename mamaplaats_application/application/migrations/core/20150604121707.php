<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150604121707 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "CREATE TABLE IF NOT EXISTS `advertisements` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `slug` varchar(30) NOT NULL,
		  `name` varchar(50) NOT NULL,
		  `description` text NOT NULL,
		  `status` enum('On','Off') NOT NULL DEFAULT 'On',
		  PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, 'DROP TABLE `advertisements`');
	}

}
