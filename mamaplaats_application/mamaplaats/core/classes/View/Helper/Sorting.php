<?php

trait View_Helper_Sorting {

	protected function sort_by_field($objects, $field)
	{
		usort($objects, function ($a, $b) use($field) {
			return $a->{$field} > $b->{$field};
		});

		return $objects;
	}

	protected function sort_by_array_field($array_items, $field, $direction)
	{
		usort($array_items, function ($a, $b) use($field) {
			if ($direction = 'desc')
			{
				return $a[$field] < $b[$field];
			}
			return $a[$field] > $b[$field];
		});

		return $array_items;
	}
}
