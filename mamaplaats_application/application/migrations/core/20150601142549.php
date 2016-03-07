<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150601142549 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		 $db->query(NULL, 'ALTER TABLE `signup_images` ADD `phone_number` TINYINT( 1 ) NULL , ADD `phone_number_text` VARCHAR( 255 ) NULL');
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		 $db->query(NULL, 'ALTER TABLE `signup_images` DROP `phone_number`, DROP `phone_number_text`');
	}

}
