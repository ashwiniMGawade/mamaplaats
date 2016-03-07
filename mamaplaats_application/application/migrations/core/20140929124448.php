<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140929124448 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
        $db->query(Database::UPDATE, '
				UPDATE wp_posts
				SET comment_count = comment_count - 3
				WHERE ID = 42818
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
