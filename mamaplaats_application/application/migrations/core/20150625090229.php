<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150625090229 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "CREATE TABLE IF NOT EXISTS `browser_info` (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`user_id` bigint(20) DEFAULT NULL,
				`ip_address` varchar(200) NOT NULL,
				`browser` text NOT NULL,
				`uri` varchar(300) NOT NULL,
				`referrer` varchar(300) NOT NULL,
				`status` smallint(6) NOT NULL DEFAULT '1',
				PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
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
