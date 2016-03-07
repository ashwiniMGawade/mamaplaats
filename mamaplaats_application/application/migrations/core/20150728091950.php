<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20150728091950 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
        $db->query(NULL, 'UPDATE  `signup_images` SET  `advertiser_id` =  "2123" WHERE  `signup_images`.`slug` = "default";');
        $db->query(NULL, 'UPDATE  `signup_images` SET  `advertiser_id` =  "7308" WHERE  `signup_images`.`slug` = "win";');
        $db->query(NULL, 'UPDATE  `signup_images` SET  `advertiser_id` =  "16999" WHERE  `signup_images`.`slug` = "cena";');
        $db->query(NULL, 'UPDATE  `signup_images` SET  `advertiser_id` =  "2889" WHERE  `signup_images`.`slug` = "testmoeders";');
        $db->query(NULL, 'UPDATE  `signup_images` SET  `advertiser_id` =  "8254" WHERE  `signup_images`.`slug` = "hellofresh";');
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
