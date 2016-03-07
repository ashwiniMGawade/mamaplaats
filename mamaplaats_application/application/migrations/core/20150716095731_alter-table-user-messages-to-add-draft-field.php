<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * altere table user_messages to add isConcept field
 */
class Migration_Core_20150716095731 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
        $db->query(NULL, 'ALTER TABLE  `user_messages` ADD  `draft` INT( 1 ) NOT NULL AFTER  `unread` ;');
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
