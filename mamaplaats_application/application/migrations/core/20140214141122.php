<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140214141122 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$meta_descriptions = $db->query(Database::SELECT, "SELECT * FROM wp_postmeta WHERE meta_key LIKE '_yoast_wpseo_metadesc'");
		foreach ($meta_descriptions as $meta_description)
		{
			$trim_descr = trim($meta_description['meta_value']);
			if (empty($trim_descr))
			{
				continue;
			}

			$db->query(Database::UPDATE, "
				UPDATE wp_posts
				SET post_excerpt = ".$db->escape($meta_description['meta_value'])."
				WHERE ID = ".$meta_description['post_id']
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
