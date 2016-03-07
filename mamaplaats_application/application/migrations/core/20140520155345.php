<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140520155345 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$product_sections = $db->query(Database::SELECT, "SELECT * FROM review_product_sections");
		foreach ($product_sections as $product_section)
		{
			list($product_rating_id, $affected_rows) = $db->query(Database::INSERT, "
				INSERT INTO review_product_ratings (review_product_id, rating_title)
				VALUES (".$product_section['review_product_id'].", ".$db->escape($product_section['question']).")
			");

			$review_sections = $db->query(Database::SELECT, "SELECT * FROM review_sections WHERE review_product_section_id = ".$product_section['id']);
			foreach ($review_sections as $review_section)
			{
				$db->query(Database::INSERT, "
					INSERT INTO review_ratings (review_id, review_product_rating_id, rating)
					VALUES (".$review_section['review_id'].", ".$product_rating_id.", ".$db->escape($review_section['rating']).")
				");
			}
		}
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
