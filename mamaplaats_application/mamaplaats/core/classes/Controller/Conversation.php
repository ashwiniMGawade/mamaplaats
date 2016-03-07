<?php

class Controller_Conversation extends Controller_Base
{

    public function before()
    {
        parent::before();

        if (empty($this->auth_user)) {
            $this->redirect(Route::url('user_login'));
        }
    }

    public function action_index()
    {
        $partner_id = $this->request->param('partner_id');
        $conversation_type_list = Kohana::$config->load('info_arrays')->get('conversation_query_params');
        $conversation_type = $this->request->query('type');

        $conversation_type = (isset($conversation_type) AND isset($conversation_type_list[$conversation_type]))
            ? $conversation_type_list[$conversation_type] : '';

        $messages = array();
        if ($post = $this->request->post()) {
            try {
                $fields = array_merge($post, $this->_get_extra_fields());
                Factory_User::writes_conversation_message()->execute($this->auth_user, $fields);
                $messages = array('messages' => array('Je bericht is succesvol verstuurd'), 'type' => 'success');
            } catch (Validate_Exception $e) {
                $messages = array('messages' => $e->errors, 'type' => 'error');
            }
        }

        $conversation = Factory_User::gets_conversation()->execute($this->auth_user->id, $partner_id, $conversation_type);
        $view = new View_Conversation_Index($conversation, $this->auth_user, $partner_id, $messages, $conversation_type);

        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_list()
    {
        $messages = array();
        $conversation_type_list = Kohana::$config->load('info_arrays')->get('conversation_query_params');
        $conversation_type = $this->request->query('type');
        $conversation_type = (isset($conversation_type) AND isset($conversation_type_list[$conversation_type]))
            ? $conversation_type_list[$conversation_type] : '';

        if ($post = $this->request->post()) {
            if (!empty($post['partner_ids'])) {
                try {
                    Factory_User::deletes_conversation()->execute($this->auth_user->id, $post['partner_ids'], $conversation_type);
                    $messages = array('messages' => array('Gesprek is verwijderd'), 'type' => 'error');
                } catch (Exception $e) {
                    $messages = array('messages' => array('Verwijderen van het gesprek is mislukt'), 'type' => 'error');
                }
            }
        }

        $conversation_list = Factory_User::gets_conversation_list()->execute($this->auth_user, $conversation_type);

        $view = new View_Conversation_List($conversation_list, $this->auth_user, $messages, $conversation_type);

        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_new()
    {
        $messages = array();
        if ($post = $this->request->post()) {
            try {
                $fields = array_merge($post, $this->_get_extra_fields());
                Factory_User::writes_conversation_message()->execute($this->auth_user, $fields);
                $messages = array('messages' => array('Je bericht is succesvol verstuurd'), 'type' => 'success');
                if (isset($post['draft'])) {
                    $this->redirect('conversation/list/?type=draft');
                } else {
                    $this->redirect('conversation/list/');
                }

            } catch (Validate_Exception $e) {
                $messages = array('messages' => $e->errors, 'type' => 'error');
            }
        }

        $view = new View_Conversation_New($this->auth_user, $messages);

        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_draft()
    {
        $message_id = $this->request->param('partner_id');
        $messages = array();
        $user_message = array();
        $post = $this->request->post();

        if (!empty($post)) {
            try {
                $fields = array_merge($post, $this->_get_extra_fields());
                $fields['draft'] = (isset($fields['draft'])) ? 1 : 0;

                $entity = Factory_Repository::conversation()->load_object(array(array('id', '=', $message_id)));
                $entity = ObjectMapper::factory()->map($fields, $entity);

                Factory_User::updates_conversation_message()->execute($this->auth_user, $entity);

                $messages = array('messages' => array('Je bericht is succesvol verstuurd'), 'type' => 'success');
                if (isset($post['draft'])) {
                    $this->redirect('conversation/list/?type=draft');
                } else {
                    $this->redirect('conversation/list/');
                }

            } catch (Validate_Exception $e) {
                $messages = array('messages' => $e->errors, 'type' => 'error');
            }
        }

        if (!empty($message_id)) {
            $user_message = Factory_Repository::conversation()->get_user_message_by_id($message_id);
            if (!empty($user_message)) {
                $user_message[0]['user'] = Factory_Repository::user()->load_object(array(array('id', '=', $user_message[0]['recipient_id'])))->as_array();
            }
        }

        $view = new View_Conversation_New($this->auth_user, $messages, $user_message);

        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_ajax()
    {
        $array = array();
        $user_model = new Model_WP_User;

        if ($name = $this->request->query('query')) {
            $options = $user_model->get_mother($name);

            foreach ($options as $option) {
                $array[] = $option->display_name;
            }
        }

        $this->auto_render = false;
        $this->request->headers('content-type', 'application/json; charset=' . Kohana::$charset);
        $this->request->response()->body(json_encode(
            array('success' => true, 'options' => $array)));

        return null;
    }

    private function _get_extra_fields()
    {
        return array(
            'author_ip' => $_SERVER['REMOTE_ADDR'],
            'created' => $this->get_time('Europe/Amsterdam'),
        );
    }

    private function get_time($timezone)
    {
        return get_object_vars(new DateTime('now', new DateTimeZone($timezone)))['date'];
    }
}
