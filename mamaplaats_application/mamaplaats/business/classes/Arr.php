<?php

class Arr extends Kohana_Arr
{
	/**
	 * Filters an array on prefixed associative keys.
	 *
	 * @param  $array array   			the array to filter.
	 * @param  $prefix string  			prefix to filter on.
	 * @param  $remove_prefix bool    	whether to remove the prefix.
	 * @return array
	 */
	public static function filter_prefixed($array, $prefix, $remove_prefix = true)
	{
		$return = array();
		foreach ($array as $key => $val)
		{
			if (preg_match('/^'.$prefix.'/', $key))
			{
				if ($remove_prefix === true)
				{
					$key = preg_replace('/^'.$prefix.'/','',$key);
				}

				$return[$key] = $val;
			}
		}

		return $return;
	}
}