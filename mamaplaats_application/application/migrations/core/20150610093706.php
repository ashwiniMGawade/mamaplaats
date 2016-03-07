<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150610093706 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `signup_images` ADD `page_title` VARCHAR( 100 ) NOT NULL AFTER `title`');
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `signup_images` DROP `page_title`');
	}

}
