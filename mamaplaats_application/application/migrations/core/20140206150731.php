<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140206150731 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		// Add the Advise Category
		$db->query(Database::UPDATE, "UPDATE wp_terms SET `name` = 'Advies' WHERE term_id = 2270");
		$db->query(Database::UPDATE, "UPDATE wp_term_taxonomy SET taxonomy = 'category' WHERE term_id = 2270");
		$db->query(Database::DELETE, "DELETE FROM wp_term_relationships WHERE term_taxonomy_id = 2326");
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
