<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140131153029 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			ALTER TABLE review_products
			DROP COLUMN status,
			ADD COLUMN application_end_date DATETIME NOT NULL AFTER modification_date,
			ADD COLUMN application_start_date DATETIME NOT NULL AFTER modification_date
			");
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
