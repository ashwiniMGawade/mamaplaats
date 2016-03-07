<?php

class Controller_Browser extends Controller_Base {

    public function before()
    {
        parent::before();

        if (empty($this->auth_user))
        {
            $this->_store_browser_info();
        }
    }

    private function _store_browser_info()
    {
        $review_slug_position = strpos($this->request->uri(), 'review-product');
        $apply_slug_position = strpos($this->request->uri(), 'apply');
        $win_slug_position = strpos($this->request->referrer(), 'win/');
        if (($review_slug_position === FALSE  OR $apply_slug_position == FALSE) AND $win_slug_position === FALSE)
        {
            return;
        }

        $uri = $this->request->uri();
        if ($win_slug_position !== FALSE)
        {
            $uri = substr($this->request->referrer(), $win_slug_position);
        }

        $browser_info = array(
            'browser' => Request::$user_agent,
            'ip_address' => Request::$client_ip,
            'referrer' => $this->request->referrer(),
            'uri' => $uri,
        );

        $browser = ObjectMapper::factory()->map($browser_info, new Entity_Browser, array());
        $browser = Factory_Guest::adds_brwoser_info()->execute($browser);

        if ( ! empty($browser))
        {
            Session::instance()->set('user_browser_id', $browser->id);
        }
    }
}