<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140212122653 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "ALTER TABLE interests ADD image varchar(50) NOT NULL AFTER id ;");

		$db->query(NULL, "
			INSERT INTO interests (id, image, title, sub_title, description) VALUES
			(1, 'health', 'gezondheid', '', ''),
			(2, 'care', 'verzorging', '', ''),
			(3, 'sightseeing more', 'uitstapjes', 'dagje uit / vakantie', ''),
			(4, 'fashion', 'mode & kleding', '', ''),
			(5, 'read02 more', 'lezen', '(kinder)boeken', ''),
			(6, 'sport', 'sports', '', ''),
			(7, 'nutrition more', 'voeding', 'koken/eten/culinair', ''),
			(8, 'life', 'wonen & interieur', '', ''),
			(9, 'baby', 'baby uitzet', '', '');
		");
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
