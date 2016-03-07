<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140218100317 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE wp_users CHANGE pregnancy_due_date pregnancy_due_date DATE NULL DEFAULT NULL ;');
		$db->query(Database::UPDATE, "UPDATE wp_users SET pregnancy_due_date = NULL WHERE pregnancy_due_date = '0000-00-00'");
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
