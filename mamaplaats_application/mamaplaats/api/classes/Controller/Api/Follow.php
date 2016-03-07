<?php

class Controller_Api_Follow extends Controller_Base
{

    protected $auto_render = FALSE;

    public function action_follow()
    {
        if (empty($this->auth_user)) {
            $this->response->body(json_encode(array('error' => 'not-logged-in')));
            return;
        }

        $following_user = Factory_User::updates_following()->execute($this->auth_user, $this->request->query('user_id'));
        $this->response->body(json_encode(array('following' => $following_user)));
    }

    public function action_is_following()
    {
        if (empty($this->auth_user)) {
            $this->response->body(json_encode(array('error' => 'not-logged-in')));
            return;
        }

        $user_id = $this->request->query('user_id');
        $following = Factory_User::gets_following()->execute($this->auth_user);

        $following_user = FALSE;
        foreach ($following as $user) {
            if ($user->id == $user_id) {
                $following_user = TRUE;
                break;
            }
        }

        $this->response->body(json_encode(array('following' => $following_user)));
    }
}