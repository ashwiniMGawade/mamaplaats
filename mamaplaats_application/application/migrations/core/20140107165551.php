<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140107165551 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{

		$db->query(NULL, 'RENAME TABLE test_reviews TO reviews');
		$db->query(NULL, 'RENAME TABLE test_products TO review_products');
		$db->query(NULL, 'RENAME TABLE test_reviews_media TO reviews_media');

		$db->query(NULL, 'ALTER TABLE reviews DROP FOREIGN KEY `reviews_ibfk_1`;');
		$db->query(NULL, 'ALTER TABLE reviews CHANGE test_product_id review_product_id INT(11);');
		$db->query(NULL, 'ALTER TABLE reviews ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`review_product_id`) REFERENCES `review_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;');

		$db->query(NULL, 'ALTER TABLE reviews DROP FOREIGN KEY `reviews_ibfk_2`;');
		$db->query(NULL, 'ALTER TABLE reviews CHANGE wp_user_id user_id BIGINT(20) UNSIGNED;');
		$db->query(NULL, 'ALTER TABLE reviews ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `wp_users` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;');

		$db->query(NULL, 'ALTER TABLE reviews_media DROP FOREIGN KEY `reviews_media_ibfk_1`;');
		$db->query(NULL, 'ALTER TABLE reviews_media CHANGE test_review_id review_id INT(11);');
		$db->query(NULL, 'ALTER TABLE reviews_media ADD CONSTRAINT `reviews_media_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;');
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
