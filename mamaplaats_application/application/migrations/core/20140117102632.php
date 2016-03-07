<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140117102632 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE `media` CHANGE `url` `path` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;");
		$db->query(NULL, "ALTER TABLE `media` ADD `description` TEXT NOT NULL AFTER `title` ;");

		$db->query(NULL, 'ALTER TABLE media DROP FOREIGN KEY `media_ibfk_1`;');
		$db->query(NULL, 'ALTER TABLE media CHANGE wp_user_id user_id BIGINT(20) UNSIGNED;');
		$db->query(NULL, 'ALTER TABLE media ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;');
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
