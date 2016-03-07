<?php

class Storage_Database_Category extends Storage_Database implements Repository_Category
{
	protected $_table_name = 'categories';
	protected $_entity_class = 'Entity_Category';

	public function  create_item_link($category_id, $item_id)
	{
		// First remove any old category links
		DB::query(Database::DELETE, "
			DELETE FROM wp_term_relationships
			WHERE object_id = '".$item_id."'
		")->execute();

		// Create a new category link
		DB::query(Database::INSERT, "
			INSERT INTO wp_term_relationships
			(object_id, term_taxonomy_id, term_order)
			VALUES ('".$item_id."', '".$category_id."', 0)
		")->execute();
	}

	public function get_item_link($item_id)
	{
		return DB::query(Database::SELECT, "
			SELECT * FROM wp_term_relationships
			WHERE object_id = '".$item_id."'
		")->execute()->current();
	}
}