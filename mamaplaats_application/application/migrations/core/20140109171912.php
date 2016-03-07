<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140109171912 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS `review_remarks` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `review_id` int(11) NOT NULL,
			  `type` enum('positive','negative') NOT NULL,
			  `remark` text NOT NULL,
			  PRIMARY KEY (`id`),
			  KEY `review_id` (`review_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			ALTER TABLE `review_remarks`
  				ADD CONSTRAINT `review_remarks_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
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
