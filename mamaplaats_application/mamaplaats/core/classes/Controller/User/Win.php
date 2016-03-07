<?php

class Controller_User_Win extends Controller_Base {
    public function before()
    {
        parent::before();

        if (empty($this->auth_user))
        {
            $this->redirect(Route::url('user_login'));
        }
    }

    public function action_subscribed()
    {
        $query = $this->request->query();
        $limit = Arr::get($query, 'limit', 15);
        $offset = Arr::get($query, 'offset', 0);

        $win_list = Factory_User::gets_win_list()->execute($this->auth_user, 'subscribed', $limit, $offset);

        $view = new View_User_Win_List($win_list, $this->request->action());
        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_suggestions()
    {
        $query = $this->request->query();
        $limit = Arr::get($query, 'limit', 15);
        $offset = Arr::get($query, 'offset', 0);

        $win_list = Factory_User::gets_win_list()->execute($this->auth_user, 'suggestions', $limit, $offset);
        $view = new View_User_Win_List($win_list, $this->request->action());
        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }
}