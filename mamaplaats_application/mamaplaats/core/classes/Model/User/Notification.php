<?php

defined('SYSPATH') or die('No direct script access.');

class Model_User_Notification extends AutoModeler_ORM {

	protected $_table_name = 'user_notifications';

	protected $_data = array(
		'id' => NULL,
		'origin_id' => NULL,
		'recipient_id' => NULL,
		'item_id' => NULL,
		'type' => '',
		'msg' => '',
		'created_on' => '',
		'unread' => NULL,
		'deleted' => NULL,
	);

	protected $_rules = array(
		'id' => array(
			array('digit'),
		),
		'origin_id' => array(
			array('digit'),
			array('not_empty'),
		),
		'recipient_id' => array(
			array('digit'),
			array('not_empty'),
		),
		'item_id' => array(
			array('digit'),
		),
		'type' => array(
			array('not_empty'),
		),
		'msg' => array(
			array('not_empty'),
		),
		'created_on' => array(
			array('date'),
			array('not_empty'),
		),
		'unread' => array(
			array('digit'),
			array('not_empty'),
		),
		'deleted' => array(
			array('digit'),
			array('not_empty'),
		),
	);

	public function get_notifications($user_id)
	{
		return $this->_db->query(Database::SELECT, "
			SELECT X.*, user.display_name as author_display_name
			FROM user_notifications as X
			LEFT JOIN wp_users as user ON (user.ID = X.origin_id)
			WHERE X.recipient_id = $user_id
			AND X.unread = 1
			ORDER BY X.created_on DESC
			LIMIT 3
		")->as_array();
	}

	public function set_notifications_read($user_id)
	{
		$this->_db->query(Database::UPDATE, "
			UPDATE user_notifications
			SET unread = 0
			WHERE recipient_id = $user_id
			AND unread = 1
		");

		return true;
	}

	/**
	 * simple_notification_save is a reusuable method to store new notes within the db.
	 *
	 * @param int $origin_id
	 * @param int $recipient_id
	 * @param string $type
	 * @param string $msg_body
	 * @param int $item_id (optional)
	 */
	public function simple_notification_save($origin_id, $recipient_id, $type, $msg_body, $item_id = null)
	{
		$setup = array(
			'origin_id' => $origin_id,
			'recipient_id' => $recipient_id,
			'item_id' => $item_id,
			'type' => $type,
			'msg' => $msg_body,
			'created_on' => date("Y-m-d H:i:s"),
			'unread' => 1,
			'deleted' => 0,
		);

		$this->set_fields($setup);
		$this->save();
	}
}