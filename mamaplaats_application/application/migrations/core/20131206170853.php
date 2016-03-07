<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20131206170853 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS `wp_user_tokens` (
			  `id` bigint(20)  UNSIGNED NOT NULL AUTO_INCREMENT,
			  `user_id` bigint(20) UNSIGNED NOT NULL,
			  `user_agent` varchar(40) NOT NULL,
			  `token` varchar(40) NOT NULL,
			  `type` varchar(100) NOT NULL,
			  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			  `expires` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
			  PRIMARY KEY (`id`),
			  UNIQUE KEY `uniq_token` (`token`),
			  KEY `fk_user_id` (`user_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			ALTER TABLE `wp_user_tokens`
  			ADD CONSTRAINT `wp_user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE;
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
