<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140724112114 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `wp_users` ADD `display_username` VARCHAR( 250 ) NOT NULL AFTER `display_name`, ADD INDEX ( `display_username` ) ');
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `wp_users` DROP `display_username`');
	}

}
