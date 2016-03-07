<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20131210151425 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE wp_user_children DROP FOREIGN KEY wp_user_children_ibfk_1;");
		$db->query(NULL, "ALTER TABLE wp_user_children CHANGE wp_user_id user_id bigint(20) UNSIGNED;");
		$db->query(NULL, "ALTER TABLE wp_user_children ADD CONSTRAINT `wp_user_children_ibfk_1` FOREIGN KEY (user_id) REFERENCES wp_users (ID) ON DELETE CASCADE ON UPDATE CASCADE;");
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
