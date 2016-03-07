<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140211140303 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE reviews ADD rating_safety FLOAT(3,1) NOT NULL AFTER rating_child_friendly ;");
		$db->query(NULL, "ALTER TABLE reviews CHANGE rating_overal_impression rating_overal_impression FLOAT(3,1) NOT NULL;");
		$db->query(NULL, "ALTER TABLE reviews CHANGE rating_price_quality rating_price_quality FLOAT(3,1) NOT NULL;");
		$db->query(NULL, "ALTER TABLE reviews CHANGE rating_design rating_design FLOAT(3,1) NOT NULL;");
		$db->query(NULL, "ALTER TABLE reviews CHANGE rating_child_friendly rating_child_friendly FLOAT(3,1) NOT NULL;");
		$db->query(NULL, "ALTER TABLE reviews CHANGE rating_overal rating_overal FLOAT(3,1) NOT NULL;");
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
