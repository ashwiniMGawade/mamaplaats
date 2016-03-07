<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140924110944 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `wp_users` CHANGE `unsubscribe` `comment_notification` TINYINT( 4 ) NOT NULL DEFAULT "1" ');
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
