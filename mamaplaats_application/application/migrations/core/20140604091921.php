<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140604091921 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$product = $db->query(Database::SELECT, "SELECT * FROM review_products WHERE id = 41");

		$this->_move_legacy_product_section($db, $product['id'], 'Introductie', 'introduction');
		$this->_move_legacy_product_section($db, $product['id'], 'De test', 'review');
		$this->_move_legacy_product_section($db, $product['id'], 'Eindoordeel', 'final_judgement');

		$this->_move_legacy_product_rating($db, $product['id'], 'Kindvriendelijkheid', 'rating_child_friendly');
		$this->_move_legacy_product_rating($db, $product['id'], 'Veiligheid', 'rating_safety');
		$this->_move_legacy_product_rating($db, $product['id'], 'Uiterlijk', 'rating_design');
		$this->_move_legacy_product_rating($db, $product['id'], 'Prijs-kwaliteitverhouding', 'rating_price_quality');
		$this->_move_legacy_product_rating($db, $product['id'], 'Uitstraling', 'rating_overal_impression');
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

	private function _move_legacy_product_section(Kohana_Database $db, $product_id, $question, $review_field)
	{
		// Create the product section
		list($product_section_id, $affected_rows) = $db->query(Database::INSERT, "
			INSERT INTO review_product_sections (review_product_id, question)
			VALUES (".$product_id.", ".$db->escape($question).")
		");

		// Create the section for the approved or published reviews
		$reviews = $db->query(Database::SELECT, "SELECT * FROM reviews WHERE review_product_id = ".$product_id." AND status IN ('approved', 'published')");
		foreach ($reviews as $review)
		{
			list($review_section_id, $affected_rows) = $db->query(Database::INSERT, "
				INSERT INTO review_sections (review_id, review_product_section_id, content, rating)
				VALUES (".$review['id'].", ".$product_section_id.", ".$db->escape($review[$review_field]).", 0.0)
			");

			if ($review_field == 'review')
			{
				$db->query(Database::UPDATE, "UPDATE reviews_media SET review_section_id = ".$review_section_id." WHERE review_id = ".$review['id']);
			}
		}
	}

	private function _move_legacy_product_rating(Kohana_Database $db, $product_id, $rating_title, $review_field)
	{
		// Create the product rating
		list($product_rating_id, $affected_rows) = $db->query(Database::INSERT, "
			INSERT INTO review_product_ratings (review_product_id, rating_title)
			VALUES (".$product_id.", ".$db->escape($rating_title).")
		");

		// Create the section for the approved or published reviews
		$reviews = $db->query(Database::SELECT, "SELECT * FROM reviews WHERE review_product_id = ".$product_id." AND status IN ('approved', 'published')");
		foreach ($reviews as $review)
		{
			$db->query(Database::INSERT, "
				INSERT INTO review_ratings (review_id, review_product_rating_id, rating)
				VALUES (".$review['id'].", ".$product_rating_id.", ".$db->escape($review[$review_field]).")
			");
		}
	}
}
