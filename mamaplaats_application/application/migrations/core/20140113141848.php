<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140113141848 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `reviews` ADD `title` VARCHAR( 200 ) NOT NULL AFTER `user_id` ;');
		$db->query(NULL, 'ALTER TABLE `review_products` ADD `slug` VARCHAR( 200 ) NOT NULL AFTER `title` ;');
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
