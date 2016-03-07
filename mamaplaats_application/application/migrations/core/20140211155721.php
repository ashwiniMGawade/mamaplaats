<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140211155721 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$review_products = $db->query(Database::SELECT, "SELECT * FROM review_products");
		foreach ($review_products as $review_product)
		{
			$image = str_replace('http://www.mamaplaats.nl/kohana/', '', $review_product['image_url']);

			$db->query(Database::UPDATE, "
				UPDATE review_products
				SET slug = '".URL::title($review_product['title'])."', image_url = '".$image."'
				WHERE id = ".$review_product['id']
			);
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
