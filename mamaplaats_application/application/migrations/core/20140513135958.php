<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140513135958 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			ALTER TABLE review_products
			CHANGE status status ENUM('invisible',  'coming',  'running',  'finished')
			CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;
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
