<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140212164411 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$media = $db->query(Database::SELECT, "SELECT * FROM media");
		foreach ($media as $media_item)
		{
			$path = str_replace('http://www.mamaplaats.nl/kohana/', '', $media_item['path']);

			$db->query(Database::UPDATE, "
				UPDATE media
				SET path = '".$path."'
				WHERE id = ".$media_item['id']
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
