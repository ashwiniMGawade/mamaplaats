<?php

trait View_Helper_Menu {

	private function _generate_menu_items(array $menu_items, $uri,  $query_params = array(), $parents = array())
	{
		$parent_uri = $this->_check_if_has_parent($uri, $parents);
		$menu = array();
		foreach ($menu_items as $menu_item)
		{
            $query_params_in_menu_path = $this->_get_query_params_from_the_menu_path($menu_item['path']);
			$menu_item['active'] 	= ($menu_item['path'] == $uri OR $menu_item['path'] == $parent_uri OR (!empty($query_params) AND $query_params == $query_params_in_menu_path));

			if (strpos($menu_item['path'] , 'http') !== false) {
				$menu_item['path'] 		= $menu_item['path'];
			} else {
				$menu_item['path'] 		= URL::site($menu_item['path'], TRUE);
			}			

			if ( ! empty($menu_item['sub_menu']))
			{
				$menu_item['sub_menu'] = $this->_generate_menu_items($menu_item['sub_menu'], $uri, $query_params, $parents);

				// Set parent item to TRUE if it has an active child item
				if (in_array(TRUE, array_column($menu_item['sub_menu'], 'active')))
				{
					$menu_item['active'] = TRUE;
				}
			}

			$menu[] = $menu_item;
		}
		return $menu;
	}

	private function _check_if_has_parent($uri, $parents)
	{
		foreach ($parents as $part => $parent)
		{
			if (strpos($uri, $part) === 0)
			{
				return $parent;
			}
		}
		return $uri;
	}

    private function _get_query_params_from_the_menu_path($path) {
        if (strpos($path, '?') !== false) {
            $query_string = explode('?',$path);
            $query_string =  $query_string[1];
            if ($query_string) {
                return $this->_get_param_list_from_query_string($query_string);
            }
        }
    }

    private function _get_param_list_from_query_string($query_string)
    {
        $params = array();
        $params_string = explode('&', $query_string);
        foreach($params_string as $param) {
            $param_item = explode('=', $param);
            $params[$param_item[0]] = $param_item[1];
        }
        return $params;
    }
}