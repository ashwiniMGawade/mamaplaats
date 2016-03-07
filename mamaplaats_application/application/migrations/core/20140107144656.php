<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140107144656 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS activities
			(
				id BIGINT(20) NOT NULL AUTO_INCREMENT,
				user_id BIGINT(20) UNSIGNED DEFAULT NULL,
				title TEXT COLLATE utf8_general_ci NOT NULL,
				content TEXT COLLATE utf8_general_ci NOT NULL,
				date DATETIME DEFAULT '0000-00-00 00:00:00	' NOT NULL,
				PRIMARY KEY (id),
				INDEX(user_id),
				FOREIGN KEY (user_id)
				REFERENCES wp_users(ID)
				ON DELETE CASCADE
				ON UPDATE CASCADE
			) ENGINE=InnoDB CHARSET=utf8
		");
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
