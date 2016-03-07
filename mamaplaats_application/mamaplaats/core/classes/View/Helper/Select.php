<?php

trait View_Helper_Select {

	/**
	 * Generate a list usable for an dropdown
	 *
	 *     Example:
	 *     $this->_select_list(
	 *         array(
	 *             '1' => 'item1',
	 *             '2' => 'item2',
	 *             '3' => 'item3',
	 *         ),
	 *         '1'
	 *     );
	 *
	 * @param array $data The fields to show
	 * @param null $selected The value of the item to set on selected
	 * @return array
	 */
	protected function select_list(array $data, $selected = NULL)
	{
		$select_list = array();

		foreach ($data as $value => $label)
		{
			$select_list[] = array(
				'value' => $value,
				'text' => i18n::get($label),
				'selected' => ( (string) $value === (string) $selected),
			);
		}

		return $select_list;
	}

	protected function select_nested(array $data, $selected = NULL, $parent_id = 0, $level = 0)
	{
		$single_indent = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

		$nested_items = array();
		foreach ($data as $item)
		{
			if ($item['parent_id'] == $parent_id)
			{
				$value = $item['value'];
				$nested_items[] = array(
					'value' 	=> $value,
					'text' 		=> str_repeat($single_indent, $level).htmlentities($item['text']),
					'selected' 	=> ( (string) $value === (string) $selected),
					'disabled' 	=> $item['disabled'],
				);

				$nested_items = array_merge($nested_items, $this->select_nested($data, $selected, $item['id'], $level + 1));
			}


		}

		return $nested_items;
	}
}
