<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140210134340 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE review_products CHANGE application_start_date application_start_date DATE NOT NULL;");
		$db->query(NULL, "ALTER TABLE review_products CHANGE application_end_date application_end_date DATE NOT NULL;");
		$db->query(NULL, "ALTER TABLE review_products CHANGE modification_date modified DATETIME NOT NULL AFTER application_end_date;");
		$db->query(NULL, "ALTER TABLE review_products ADD created DATETIME NOT NULL AFTER application_end_date;");
		$db->query(NULL, "ALTER TABLE review_products ADD media_short TEXT NOT NULL AFTER description;");
		$db->query(NULL, "ALTER TABLE review_products ADD conclusion TEXT NOT NULL AFTER terms ;");
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
