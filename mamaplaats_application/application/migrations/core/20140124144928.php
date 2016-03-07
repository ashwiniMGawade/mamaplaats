<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140124144928 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS `interests` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `title` varchar(50) NOT NULL,
			  `sub_title` varchar(50) NOT NULL,
			  `description` TEXT NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS `wp_users_interests` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `user_id` bigint(20) unsigned NOT NULL,
			  `interest_id` int(11) NOT NULL,
			  PRIMARY KEY (`id`),
			  KEY `user_id` (`user_id`),
			  KEY `interest_id` (`interest_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			ALTER TABLE `wp_users_interests`
  			ADD CONSTRAINT `wp_users_interests_ibfk_2` FOREIGN KEY (`interest_id`) REFERENCES `interests` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  			ADD CONSTRAINT `wp_users_interests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
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
