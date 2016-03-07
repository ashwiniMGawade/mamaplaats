<?php defined('SYSPATH') or die('No direct script access.');

class View_Guest_Activate
{

    use View_Helper_Select, View_Helper_Message, View_Helper_Time, View_Helper_ProfileProgress, View_Helper_TrackingPixel;

    public $title = 'Registreer';

    private $_user = array(
        'pregnancy_due_date' => array(
            'year' => '',
        ),
        'children' => array(),
    );

    private $_left_panel;
    private $_select_info;
    private $_newsletter_group;
    private $_source;
    private $_advertiser_id;

    public function __construct($user, $left_panel, $select_info, $messages, $newsletter_group, $source, $advertiser_id)
    {
        $user['is_pregnant'] = (!empty($user['pregnancy_due_date']['day']));
        $user['has_children'] = (!empty($user['children']));

        $this->_user = array_merge($this->_user, $user);
        $this->_left_panel = $left_panel;
        $this->_select_info = $select_info;
        $this->messages = $messages;
        $this->_source = $source;
        $this->_advertiser_id = $advertiser_id;
    }

    public function has_messages()
    {
        return $this->get_messages();
    }

    public function success()
    {
        if (empty($this->messages) OR $this->messages['type'] != 'success') {
            return FALSE;
        }

        $source = (!empty($this->messages['source'])) ? $this->messages['source'] : 'default';

        $show_pixel = ($this->_user['newsletter']);

        if (!empty($this->_newsletter_group) AND $this->_newsletter_group == 1) {
            $show_pixel = ($this->_newsletter_group);
        }

        $arr = array(
            'show_pixel' => $show_pixel,
            'source' => $source,
            'user_id' => $this->_user['id'],
            'email' => $this->_user['email'],
            'advertiser_id' => $this->_advertiser_id,
        );
        return $arr;
    }

    public function user()
    {
        return $this->_user;
    }

    public function pregnancy_years()
    {
        return $this->select_list($this->get_year_range(0, 1), $this->_user['pregnancy_due_date']['year']);
    }

    public function children()
    {
        return json_encode($this->_user['children']);
    }

    public function child_years()
    {
        return $this->select_list($this->get_year_range(20));
    }

    public function child_genders()
    {
        return $this->select_list($this->_select_info['child_genders']);
    }

    public function left_panel()
    {
        return $this->_left_panel;
    }

    public function tracking_pixel()
    {
        if (!empty($this->_source)) {
            return $this->get_tracking_pixel($this->_source);
        }

        return false;
    }
}