<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Profile
{

    use View_Helper_ImagePath, View_Helper_Menu, View_Helper_ProfileProgress;

    public $title = 'Profile';

    private $_request;
    private $_user;
    private $_core_config;
    private $_content;
    private $_profile_progress_data;
    private $_request_url;
    private $_unread_inbox_message_count;

    public function __construct($request, $user, $core_config, $content, $profile_progress_data, $request_url, $unread_inbox_message_count)
    {
        $this->_request = $request;
        $this->_user = $user;
        $this->_core_config = $core_config;
        $this->_content = $content;
        $this->_profile_progress_data = $profile_progress_data;
        $this->_request_url = $request_url;
        $this->_unread_inbox_message_count = $unread_inbox_message_count;
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

        return $menus;
    }

    public function user()
    {
        $user = $this->_user;
        $user->avatar = $this->get_image_path('avatar', $user->id, 140, 120, $user->profile_image_ext);

        return $user;
    }

    public function content()
    {
        return $this->_content;
    }

    public function is_first_visit()
    {
        $get_data = $this->_request->query();

        return (isset($get_data['visit']));
    }

    public function profile_progress_stages()
    {
        return $this->profile_stages($this->_profile_progress_data);
    }

    public function profile_progress_percentage()
    {
        return $this->calculate_profile_percentage($this->_profile_progress_data);
    }

    public function show_profile_progress()
    {
        return false;

        $logged_in = $this->_request_url->query('logged_in');

        if (empty($this->_user->login_count) AND !empty($logged_in)) {
            return true;
        }

        return false;
    }
}