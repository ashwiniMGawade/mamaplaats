<?php

class Storage_Database_Conversation extends Storage_Database_Translate implements Repository_Conversation
{
    protected $_table_name = 'user_messages';
    protected $_entity_class = 'Entity_Conversation';

    protected $_field_translate = array(
        'id' => 'id',
        'author_id' => 'author_id',
        'recipient_id' => 'recipient_id',
        'author_ip' => 'author_ip',
        'created_on' => 'created',
        'msg_body' => 'content',
        'unread' => 'unread',
        'draft' => 'draft',
        'deleted' => 'deleted',
    );

    protected $_translate_select = array(
        array('user_messages.id', 'id'),
        array('user_messages.author_id', 'author_id'),
        array('user_messages.recipient_id', 'recipient_id'),
        array('user_messages.author_ip', 'author_ip'),
        array('user_messages.created_on', 'created'),
        array('user_messages.msg_body', 'content'),
        array('user_messages.unread', 'unread'),
        array('user_messages.draft', 'draft'),
        array('user_messages.deleted', 'deleted'),
    );

    public function get_conversation($user_id, $partner_id, $conversation_type = '')
    {
        $select = $this->_query_builder->select();
        $select->from($this->_table_name);
        $select->select_array($this->_translate_select);
        $select->where_open();
        $select->where('user_messages.recipient_id', '=', $user_id);
        if (!empty($conversation_type)) {
            $select->and_where('user_messages.' . $conversation_type, '=', 1);
        } else {
            $select->and_where('user_messages.draft', '=', 0);
        }
        $select->and_where('user_messages.author_id', '=', $partner_id);
        $select->where_close();
        $select->or_where_open();
        $select->where('user_messages.recipient_id', '=', $partner_id);
        $select->and_where('user_messages.author_id', '=', $user_id);
        if (!empty($conversation_type)) {
            $select->and_where('user_messages.' . $conversation_type, '=', 1);
        } else {
            $select->and_where('user_messages.draft', '=', 0);
        }
        $select->or_where_close();

        $select->order_by('user_messages.created_on', 'DESC');

        $conversation = array();
        foreach ($select->execute() as $result) {
            $conversation[] = new Entity_Conversation($result);
        }
        return $conversation;
    }

    public function get_outbox_conversation($user_id, $partner_id)
    {
        $select = $this->_query_builder->select();
        $select->from($this->_table_name);
        $select->select_array($this->_translate_select);
        $select->where_open();
        $select->where('user_messages.author_id', '=', $user_id);
        $select->and_where('user_messages.recipient_id', '=', $partner_id);
        $select->and_where('user_messages.draft', '=', 0);
        $select->where_close();
        $select->order_by('user_messages.created_on', 'DESC');

        $conversation = array();
        foreach ($select->execute() as $result) {
            $conversation[] = new Entity_Conversation($result);
        }
        return $conversation;
    }

    public function get_inbox_conversation($user_id, $partner_id)
    {
        $select = $this->_query_builder->select();
        $select->from($this->_table_name);
        $select->select_array($this->_translate_select);
        $select->where_open();
        $select->where('user_messages.recipient_id', '=', $user_id);
        $select->and_where('user_messages.author_id', '=', $partner_id);
        $select->and_where('user_messages.draft', '=', 0);
        $select->where_close();
        $select->order_by('user_messages.created_on', 'DESC');
        $conversation = array();
        foreach ($select->execute() as $result) {
            $conversation[] = new Entity_Conversation($result);
        }
        return $conversation;
    }

    public function get_conversation_partners($user_id, $conversation_type = '')
    {
        $query = "SELECT author_id AS partner
			FROM user_messages
			WHERE recipient_id = '" . $user_id . "'";

        if (!empty($conversation_type)) {
            $query .= " and user_messages." . $conversation_type . " = 1 ";
        }
        $query .= "	UNION
			SELECT recipient_id
			FROM user_messages
			WHERE author_id  = '" . $user_id . "'";

        if (!empty($conversation_type)) {
            $query .= " and user_messages." . $conversation_type . " = 1 ";
        }
        $query .= "ORDER BY partner";
        return DB::query(Database::SELECT, $query)->execute()->as_array();
    }

    public function get_inbox_conversation_partners($user_id)
    {
        $query = "SELECT distinct author_id AS partner
			FROM user_messages
			WHERE recipient_id = '" . $user_id . "' ORDER BY created_on DESC";

        return DB::query(Database::SELECT, $query)->execute()->as_array();
    }

    public function get_outbox_conversation_partners($user_id)
    {
        $query = "SELECT distinct recipient_id AS partner
			FROM user_messages
			WHERE author_id = '" . $user_id . "' ORDER BY created_on DESC";

        return DB::query(Database::SELECT, $query)->execute()->as_array();
    }

    public function get_unread_inbox_message_count($user_id)
    {
        $query = "SELECT count(*) as unread_message_count
			FROM user_messages
			WHERE recipient_id = '" . $user_id . "' and unread = 1 and draft = 0";

        return DB::query(Database::SELECT, $query)->execute()->as_array();
    }

    public function get_user_message_by_id($id)
    {
        $query = "SELECT *
			FROM user_messages
			WHERE id = " . $id;

        return DB::query(Database::SELECT, $query)->execute()->as_array();
    }

}