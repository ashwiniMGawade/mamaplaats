<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140924082058 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
        $db->query(Database::UPDATE, '
				UPDATE wp_users
				SET user_activation_key = NULL
				WHERE user_email = "ingeborg.schijvens@gmail.com"
		');
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
