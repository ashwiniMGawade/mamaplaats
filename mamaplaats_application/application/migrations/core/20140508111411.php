<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140508111411 extends Minion_Migration_Base {

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS featured_sections (
			  id int(11) NOT NULL AUTO_INCREMENT,
			  tag varchar(50) NOT NULL,
			  title varchar(50) NOT NULL,
			  description TEXT NOT NULL,
			  template varchar(50) NOT NULL,
			  PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
		");

		$db->query(NULL, "
			CREATE TABLE IF NOT EXISTS featured_section_blocks (
			  id int(11) NOT NULL AUTO_INCREMENT,
			  featured_section_id int(11) NOT NULL,
			  title varchar(50) NOT NULL,
			  image TEXT NOT NULL,
			  url TEXT NOT NULL,
			  order_number int(11) NOT NULL,
			  show_mobile TINYINT(1) DEFAULT 0 NOT NULL,
			  PRIMARY KEY (id),
			  FOREIGN KEY (featured_section_id) REFERENCES featured_sections(id) ON DELETE CASCADE ON UPDATE CASCADE
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
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
