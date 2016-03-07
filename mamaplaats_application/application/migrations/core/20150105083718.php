<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150105083718 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE `advertisement_popup` ADD `start_date` DATE NULL , ADD `end_date` DATE NULL");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE  `advertisement_popup` DROP  `start_date` , DROP  `end_date` ;');
	}

}
