<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140829161601 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$users = $db->query(Database::SELECT, "SELECT * FROM wp_users WHERE display_username != '' AND display_name = ''");
		foreach ($users as $user)
		{
			$db->query(Database::UPDATE, '
				UPDATE wp_users
				SET display_name = "'.$user['display_username'].'"
				WHERE ID = "'.$user['ID'].'"
			');
		}
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
