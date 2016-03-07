<?php

class View_Header
{

    use View_Helper_Time, View_Helper_ImagePath, View_Helper_Menu, View_Helper_Advertisements;

    private $_user;
    private $_menu_items;
    private $_uri;
    private $_timeline;
    private $_core_config;
    private $_unread_inbox_message_count;

    public $_request;

    public function __construct($user, $menu_items, $uri, $timeline, $request = null, $core_config, $unread_inbox_message_count)
    {
        $this->_user = $user;
        $this->_menu_items = $menu_items;
        $this->_uri = $uri;
        $this->_timeline = $timeline;
        $this->_request = $request;
        $this->_core_config = $core_config;
        $this->_unread_inbox_message_count = $unread_inbox_message_count;
    }

    public function main_menu()
    {
        $parents = array(
            'blog/list/recepten' => 'blog/list/recepten',
            'blog/list/videos' => 'blog/list/videos',
            'blog/list/actueel' => 'blog/list/actueel',
            'blog/list/showbizz' => 'blog/list/showbizz',
            'blog' => 'blog/list',
            'advies' => 'advies/list',
            'expert' => 'expert/list',
            'win' => 'win',
            'review/aankomende' => 'review/aankomende',
            'review/lopende' => 'review/lopende',
            'review' => 'review/afgeronde',
            'korting/winkel' => 'korting/winkels',
            'korting/categorie' => 'korting/categorien',
        );

        $request_query = ! empty($this->_request) ? $this->_request->query() : array();

        return $this->_generate_menu_items($this->_menu_items, $this->_uri, $request_query, $parents);

    }

    public function logged_in()
    {
        return (!empty($this->_user->id));
    }

    public function timeline()
    {
        $timeline = array();
        foreach ($this->_timeline as $item) {
            $user = $item['user'];
            $item = $item['activity'];

            $item->image_path = $this->get_image_path('avatar', $item->user_id, 100, 100, $user->profile_image_ext);
            $item->path = URL::site($item->path, TRUE);
            $item->date = $this->get_time_ago($item->date);
            $timeline[] = $item;
        }

        return $timeline;
    }

    public function isSslOn()
    {
        if (!empty($this->_request) and !empty($this->_request->secure())) {
            return $this->_request->secure();
        }
        return false;
    }

    public function user_info()
    {
        return $this->_user;
    }

    public function menu()
    {
        $parents = array(
            'user/blog/index' => 'user/profile',
        );
        $return = $this->_generate_menu_items($this->_core_config['profile_menu'], $this->_request->uri(), $this->_request->query(), $parents);

        return $this->_append_message_count($return);
    }

    private function _append_message_count($menus)
    {
        foreach ($menus as $menu_index => $menu_item) {
            if (strpos($menu_item['path'], 'conversation/list') !== false) {
                foreach ($menu_item['sub_menu'] as $sub_menu_index => $sub_menu) {
                    if (strpos($sub_menu['path'], 'inbox') !== false) {
                        $menus[$menu_index]['sub_menu'][$sub_menu_index]['count'] = $this->_unread_inbox_message_count;
                    }
                }
            }
        }

        $menus[0]['sub_menu'][] = array(
            'text' => 'Uitloggen',
            'path' =>  URL::site('user/logout', TRUE),
            'active' =>  '',
        );


        return $menus;
    }
}
