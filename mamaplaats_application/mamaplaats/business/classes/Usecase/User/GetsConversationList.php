<?php

class Usecase_User_GetsConversationList
{

    /**
     * @var Repository_Conversation
     */
    private $_repository_conversation;

    /**
     * @var Repository_User
     */
    private $_repository_user;

    public function __construct($repository_conversation, $repository_user)
    {
        $this->_repository_conversation = $repository_conversation;
        $this->_repository_user = $repository_user;
    }

    public function execute(Entity_User $user, $conversation_type = '')
    {
        switch ($conversation_type) {
            case 'inbox' :
                return $this->_get_inbox_message_list($user->id);
                break;
            case 'outbox' :
                return $this->_get_outbox_message_list($user->id);
                break;
            default:
                return $this->_get_message_list($user->id, $conversation_type);
        }
    }

    private function _get_inbox_message_list($user_id)
    {
        $conversation_partners = $this->_get_inbox_conversation_partners($user_id);
        $message_list = array();
        foreach ($conversation_partners as $conversation_partner) {
            $message_list[] = array(
                'conversation_partner' => $conversation_partner,
                'conversation' => $this->_repository_conversation->get_inbox_conversation($user_id, $conversation_partner->id),
            );
        }
        return $message_list;
    }

    private function _get_outbox_message_list($user_id)
    {
        $conversation_partners = $this->_get_outbox_conversation_partners($user_id);

        $message_list = array();
        foreach ($conversation_partners as $conversation_partner) {
            $message_list[] = array(
                'conversation_partner' => $conversation_partner,
                'conversation' => $this->_repository_conversation->get_outbox_conversation($user_id, $conversation_partner->id),
            );
        }
        return $message_list;
    }

    private function _get_message_list($user_id, $conversation_type = '')
    {
        $conversation_partners = $this->_get_conversation_partners($user_id, $conversation_type);

        $message_list = array();
        foreach ($conversation_partners as $conversation_partner) {
            $message_list[] = array(
                'conversation_partner' => $conversation_partner,
                'conversation' => $this->_repository_conversation->get_conversation($user_id, $conversation_partner->id, $conversation_type),
            );
        }

        return $message_list;
    }

    private function _get_conversation_partners($user_id, $conversation_type = '')
    {
        $conversation_partner_ids = $this->_repository_conversation->get_conversation_partners($user_id, $conversation_type);
        return $this->_generate_conversation_partners_list($conversation_partner_ids);
    }


    private function _get_inbox_conversation_partners($user_id)
    {
        $conversation_partner_ids = $this->_repository_conversation->get_inbox_conversation_partners($user_id);
        return $this->_generate_conversation_partners_list($conversation_partner_ids);
    }

    private function _get_outbox_conversation_partners($user_id)
    {
        $conversation_partner_ids = $this->_repository_conversation->get_outbox_conversation_partners($user_id);
        return $this->_generate_conversation_partners_list($conversation_partner_ids);
    }


    private function _generate_conversation_partners_list($conversation_partner_ids)
    {
        $conversation_partners = array();

        foreach ($conversation_partner_ids as $conversation_partner_id) {
            $conversation_partners[] = $this->_repository_user->load_object(array(array('id', '=', $conversation_partner_id)));
        }
        return $conversation_partners;
    }
}
