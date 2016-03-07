<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140210111623 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE review_products ADD user_id bigint(20) UNSIGNED AFTER id;");
		$db->query(NULL, "ALTER TABLE review_products ADD INDEX user_id (user_id);");

		$db->query(NULL, "
			ALTER TABLE review_products
				ADD CONSTRAINT review_products_ibfk_1
				FOREIGN KEY (user_id)
				REFERENCES wp_users (ID) ON DELETE CASCADE ON UPDATE CASCADE;
		");

		$db->query(Database::UPDATE, "UPDATE review_products SET user_id = 1");
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
