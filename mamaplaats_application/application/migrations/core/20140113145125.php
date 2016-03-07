<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140113145125 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE `reviews` ADD `comment_count` INT NOT NULL AFTER `status` ;');
		$db->query(NULL, 'ALTER TABLE `review_products` ADD `category_id` INT NOT NULL AFTER `id` ;');
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
