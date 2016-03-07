<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140327145924 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "DROP TABLE partner_page");
		$db->query(NULL, "DROP TABLE point_rule_terms");
		$db->query(NULL, "DROP TABLE point_transactions");
		$db->query(NULL, "DROP TABLE point_triggers");
		$db->query(NULL, "DROP TABLE point_rules");
		$db->query(NULL, "DROP TABLE registration_pages");
		$db->query(NULL, "DROP TABLE user_notifications");
		$db->query(NULL, "DROP TABLE wp_contact_form_7");
		$db->query(NULL, "DROP TABLE wp_user_invoices");
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
