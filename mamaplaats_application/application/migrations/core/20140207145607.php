<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140207145607 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$win_list = $db->query(Database::SELECT, "
			SELECT win.ID AS id
			FROM wp_posts AS win
			WHERE win.post_type = 'post'
			AND win.post_status = 'publish'
			AND win.ID IN (
				SELECT object_id
				FROM wp_term_relationships
				WHERE term_taxonomy_id = 19
			)
		");

		$still_active = array(75380, 75385, 75364, 75363, 75355, 75350, 75312, 75307, 75298, 75292, 75265);
		foreach ($win_list as $win_item)
		{
			if (in_array($win_item['id'], $still_active))
			{
				continue;
			}

			// Add to the new category
			$db->query(Database::DELETE, "DELETE FROM wp_term_relationships WHERE object_id = ".$win_item['id']." AND term_taxonomy_id = 19");
			$db->query(Database::INSERT, "
				INSERT INTO wp_term_relationships (object_id, term_taxonomy_id)
				VALUES (".$win_item['id']." , 3161)
			");
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
