<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140131163007 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "UPDATE review_products
		SET application_start_date = '2013-01-01 12:00:00', application_end_date = '2013-02-01 12:00:00'
		WHERE application_start_date = '0000-00-00 00:00:00' AND application_end_date = '0000-00-00 00:00:00'
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
