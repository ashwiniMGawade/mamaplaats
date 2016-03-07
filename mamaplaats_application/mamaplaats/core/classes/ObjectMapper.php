<?php

class ObjectMapper
{
	public static function factory()
	{
		return new ObjectMapper;
	}

	public function map(array $array, $object, array $whitelist = array())
	{
		foreach ($array as $key => $value)
		{
			if ( ! property_exists($object, $key))
			{
				continue;
			}

			if ($this->_if_key_is_in_whitelist($key, $whitelist) === TRUE)
			{
				continue;
			}

			if (is_array($object->{$key}))
			{
				if ( ! is_array($value))
				{
					throw new ObjectMapperException('Trying to fill object array value with different type');
				}

				if ( ! empty(array_column($value, 'id')))
				{
					$object->{$key} = $this->_map_lists_based_on_id($object->{$key}, $value);
				}
				else
				{
					$object->{$key} = array_merge_recursive($object->{$key}, $value);
				}
			}
			else
			{
				$object->{$key} = $value;
			}
		}

		return $object;
	}

	private function _if_key_is_in_whitelist($key, $whitelist)
	{
		return ( ! empty($whitelist) AND ! in_array($key, $whitelist));
	}

	private function _map_lists_based_on_id($current_list, $map_list)
	{
		$current_list_ids = array_column($current_list, 'id');

		foreach ($map_list as $map_item)
		{
			if (in_array($map_item['id'], $current_list_ids))
			{
				$key = array_search($map_item['id'], $current_list_ids);
				$current_list[$key] = array_merge($current_list[$key], $map_item);
			}
			else
			{
				$current_list[] = $map_item;
			}
		}

		return $current_list;
	}
}