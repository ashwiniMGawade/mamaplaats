<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140327145629 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "DROP TABLE couponclub_config");
		$db->query(NULL, "DROP TABLE couponclub_item");
		$db->query(NULL, "DROP TABLE couponclub_notes");
		$db->query(NULL, "DROP TABLE couponclub_page");
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
