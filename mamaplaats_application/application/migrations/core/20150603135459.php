<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150603135459 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `wp_users` ADD `phone_number` VARCHAR( 12 ) NULL AFTER `last_name`');
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `wp_users` DROP `phone_number`');
	}

}
