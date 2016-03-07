<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140122151243 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS `review_products_media` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `review_product_id` int(11) DEFAULT NULL,
			  `media_id` int(11) NOT NULL,
			  PRIMARY KEY (`id`),
			  KEY `review_product_id` (`review_product_id`),
			  KEY `media_id` (`media_id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			ALTER TABLE `review_products_media`
  				ADD CONSTRAINT `review_products_media_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  				ADD CONSTRAINT `review_products_media_ibfk_2` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
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
