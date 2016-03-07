<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140610165431 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$advise_ids = $this->_get_post_ids_by_category($db, '2326');
		foreach ($advise_ids as $advise_id)
		{
			$this->_change_post_type($db, $advise_id, 'advise');
			$this->_delete_post_category($db, $advise_id, 2326);
		}

		$expert_ids = $this->_get_post_ids_by_category($db, '3163');
		foreach ($expert_ids as $expert_id)
		{
			$this->_change_post_type($db, $expert_id, 'expert');
			$this->_delete_post_category($db, $expert_id, 3163);
		}

		$win_ids = $this->_get_post_ids_by_category($db, '19,3161');
		foreach ($win_ids as $win_id)
		{
			$this->_change_post_type($db, $win_id, 'win');
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

	private function _get_post_ids_by_category(Kohana_Database $db, $categories)
	{
		$results = $db->query(Database::SELECT, "SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id IN (".$categories.")");

		$ids = array();
		foreach ($results as $object)
		{
			$ids[] = $object['object_id'];
		}

		return $ids;
	}

	private function _change_post_type(Kohana_Database $db, $post_id, $type)
	{
		$db->query(Database::UPDATE, "UPDATE wp_posts SET post_type = '".$type."' WHERE ID = ".$post_id);
	}

	private function _delete_post_category(Kohana_Database $db, $post_id, $category_id)
	{
		$db->query(Database::DELETE, "DELETE FROM wp_term_relationships WHERE object_id = ".$post_id." AND term_taxonomy_id = ".$category_id);
	}
}
