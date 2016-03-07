<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140520154017 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS review_product_ratings (
			  id int(11) NOT NULL AUTO_INCREMENT,
			  review_product_id int(11) NOT NULL,
			  rating_title varchar(200) NOT NULL,
			  PRIMARY KEY (id),
			  KEY review_product_id (review_product_id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			ALTER TABLE review_product_ratings
			  ADD CONSTRAINT review_product_ratings_ibfk_1 FOREIGN KEY (review_product_id)
			  REFERENCES review_products (id) ON DELETE CASCADE ON UPDATE CASCADE;
		");

		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS review_ratings (
			  id int(11) NOT NULL AUTO_INCREMENT,
			  review_id int(11) NOT NULL,
			  review_product_rating_id int(11) NOT NULL,
			  rating float(3,1) NOT NULL,
			  PRIMARY KEY (id),
			  KEY review_id (review_id),
			  KEY review_product_rating_id (review_product_rating_id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			ALTER TABLE review_ratings
  			  ADD CONSTRAINT review_ratings_ibfk_2 FOREIGN KEY (review_product_rating_id)
  			  REFERENCES review_product_ratings (id) ON DELETE CASCADE ON UPDATE CASCADE,
  			  ADD CONSTRAINT review_ratings_ibfk_1 FOREIGN KEY (review_id)
  			  REFERENCES reviews (id) ON DELETE CASCADE ON UPDATE CASCADE;
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
