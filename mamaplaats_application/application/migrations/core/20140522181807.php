<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140522181807 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$reviews = $db->query(Database::SELECT, "SELECT * FROM reviews WHERE status IN ('approved', 'published') AND published = '0000-00-00 00:00:00'");
		foreach ($reviews as $review)
		{
			$db->query(Database::UPDATE, "UPDATE reviews SET published = '".$review['created']."' WHERE id =".$review['id']);
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
