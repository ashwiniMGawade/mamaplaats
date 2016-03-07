<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150612122132 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE `review_products` ADD `phone_access_field` ENUM( '0', '1' ) NOT NULL DEFAULT '0'");
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE `review_products` DROP `phone_access_field`");
	}

}
