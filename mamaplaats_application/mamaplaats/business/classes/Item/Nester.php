<?php

class Item_Nester {

	public function nest($items)
	{
		$nested_items = array();
		foreach($items as $item)
		{
			// comments and blogs are nested by id but categories are nested by term_id
			$item_id = (isset($item->term_id)) ? $item->term_id : $item->id;

			$item->children = $this->_get_children($item_id, $items);
			if ($item->parent_id == 0)
			{
				$nested_items[$item->id] = $item;
			}
		}

		return $nested_items;
	}

	public function get_parent_with_children_ids($parent, $items)
	{
		$item_ids 	= array($parent->id => $parent->id);

		// comments and blogs are nested by id but categories are nested by term_id
		$parent_id 	= (isset($parent->term_id)) ? $parent->term_id : $parent->id;

		$children = $this->_get_children($parent_id, $items);

		foreach ($children as $child)
		{
			$item_ids[$child->id] = $child->id;
			$item_ids = array_replace($item_ids, $this->get_parent_with_children_ids($child, $items));
		}

		return $item_ids;
	}

	private function _get_children($item_id, $items)
	{
		$children = array();
		foreach ($items as $item)
		{
			if ($item->parent_id == $item_id)
			{
				$children[] = $item;
			}
		}

		return $children;
	}
}