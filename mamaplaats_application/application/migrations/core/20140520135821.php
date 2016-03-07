<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140520135821 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE  reviews ADD  meta_title VARCHAR( 200 ) NOT NULL AFTER  slug ;");
		$db->query(NULL, "ALTER TABLE  reviews ADD  meta_description TEXT NOT NULL AFTER  meta_title ;");
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
