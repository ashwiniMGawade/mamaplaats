<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140217133059 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$reviews = $db->query(Database::SELECT, "SELECT * FROM reviews WHERE status IN ('approved', 'published')");
		foreach ($reviews as $review)
		{
			$title = ucfirst(str_replace('-', ' ', $review['slug']));
			$db->query(Database::UPDATE, "UPDATE reviews SET title = ".$db->escape($title)." WHERE id = ".$review['id']);
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
