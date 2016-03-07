<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140509120453 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE `review_products` ADD `status` enum('coming','running','finished') NOT NULL AFTER `application_end_date` ;");
		$db->query(NULL, "ALTER TABLE  `mamaplaatsnew`.`review_products` ADD INDEX (  `status` ,  `application_end_date` ) COMMENT  '';");

		// First set everything to finished
		$db->query(NULL, "UPDATE review_products SET status = 'finished'");

		$different_status = array(
			62 => 'coming',
			63 => 'coming',
			64 => 'coming',
			56 => 'running',
			55 => 'running',
			54 => 'running',
			53 => 'running',
			52 => 'running',
			51 => 'running',
			35 => 'running',
			28 => 'running',
		);

		foreach ($different_status as $id => $status)
		{
			$db->query(NULL, "UPDATE review_products SET status = '".$status."' WHERE id = ".$id);
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
