<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20141120071854 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE signup_images ADD (double_opt tinyint(1),double_opt_text VARCHAR (255),mailchimp_group VARCHAR (50))');
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		$db->query(NULL, 'ALTER TABLE signup_images DROP COLUMN double_opt,double_opt_text,mailchimp_group');
	}

}
