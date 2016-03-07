<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20131204102609 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE VIEW categories AS
				SELECT term_taxonomy_id as id, wp_term_taxonomy.parent AS parent_id, wp_terms.slug, wp_terms.name AS title, wp_term_taxonomy.description, wp_term_taxonomy.`count`
				FROM wp_term_taxonomy, wp_terms
				WHERE wp_term_taxonomy.term_id = wp_terms.term_id
				AND wp_term_taxonomy.taxonomy = 'category';
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
