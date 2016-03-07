<?php

defined('SYSPATH') or die('No direct script access.');

class Model_User_Message extends AutoModeler_ORM
{

    protected $_table_name = 'user_messages';

    protected $_data = array(
        'id' => NULL,
        'author_id' => NULL,
        'recipient_id' => NULL,
        'author_ip' => NULL,
        'created_on' => NULL,
        'msg_body' => NULL,
        'unread' => NULL,
        'draft' => NULL,
        'deleted' => NULL,
    );

    protected $_rules = array(
        'id' => array(
            array('digit'),
        ),
        'author_id' => array(
            array('digit'),
            array('not_empty'),
        ),
        'recipient_id' => array(
            array('digit'),
            array('not_empty'),
        ),
        'author_ip' => array(
            array('not_empty'),
        ),
        'created_on' => array(
            array('date'),
            array('not_empty'),
        ),
        'msg_body' => array(
            array('not_empty'),
        ),
        'unread' => array(
            array('digit'),
            array('not_empty'),
        ),
        'draft' => array(
            array('digit')
        ),
        'deleted' => array(
            array('digit'),
            array('not_empty'),
        ),
    );

    public function get_messages($user_id)
    {
        $user_id = $this->_db->escape($user_id);

        return $this->_db->query(Database::SELECT, "
			SELECT X.*,
				user.user_nicename as author_nice_name,
				user.display_name as author_display_name,
				user.biography as author_biography,
				recipient.user_nicename as recipient_nice_name,
				recipient.display_name as recipient_display_name,
				recipient.biography as recipient_biography
			FROM (
				SELECT *
				FROM user_messages
				ORDER BY created_on DESC
			) X
			LEFT JOIN wp_users as user ON (user.ID = X.author_id)
			LEFT JOIN wp_users as recipient ON (recipient.ID = X.recipient_id)
			WHERE X.author_id = $user_id OR X.recipient_id = $user_id
			ORDER BY X.created_on DESC, X.id DESC
		")->as_array();
    }

    public function get_unread_messages($recipient_id)
    {
        $messages = $this->_db->query(Database::SELECT, "
			SELECT count(id) as messages
			FROM `user_messages`
			WHERE `recipient_id` = " . $this->_db->escape($recipient_id) . "
			AND `unread` = 1
		")->current();

        return $messages['messages'];
    }

    public function set_messages_to_read($user_id, $recipient_id)
    {
        $user_id = $this->_db->escape($user_id);
        $recipient_id = $this->_db->escape($recipient_id);

        $this->_db->query(Database::UPDATE, "
			UPDATE user_messages
			SET unread = 0
			WHERE recipient_id = $recipient_id AND author_id = $user_id");

        return true;
    }
}