<?php

class Controller_Guest extends Controller_Browser
{

    public function before()
    {
        parent::before();
    }

    public function action_register()
    {
        $type = $this->request->param('type', 'default');

        $ref = '';
        if (!is_null($this->request->query('ref'))) {
            $ref = 1;
        }

        $messages = array();
        if ($post = $this->request->post()) {
            try {
                $fields = array_merge($post, array(
                    'birthdate' => $this->_merge_date($post['birthdate']),
                    'registration_ip' => $_SERVER['REMOTE_ADDR'],
                ));

                Factory_Guest::registers_account()->execute($fields, $type, $ref);

                $messages = array(
                    'messages' => array('
						Je account is met succes geregistreerd. Voordat je kan inloggen moet je
						op de verificatie link klikken die we naar je email hebben gestuurd.
					'),
                    'type' => 'success'
                );
            } catch (Validate_Exception $e) {
                $messages = array('messages' => $e->errors, 'type' => 'error');
            }
        }

        $left_panel_images = Factory_Repository::signup_images()->load_object(array(array('slug', '=', $type)));

        $this->view = new View_Guest_Register(
            $post,
            $left_panel_images,
            Kohana::$config->load('info_arrays'),
            $messages
        );
    }

    public function action_activate()
    {
        $user_id = $this->request->query('user_id');
        $key = $this->request->query('key');
        $source = $this->request->query('source');
        $ref = $this->request->query('ref');
        $post = $this->request->post();
        $advertiser_id = '';

        $newsletter_group = false;
        if (!empty($source) AND !empty($this->request->query('newsletter_group'))) {
            $newsletter_group = base64_decode($this->request->query('newsletter_group'));
        } elseif (!empty($source) AND empty($this->request->query('newsletter_group')) AND empty($ref)) {
            $ref = ($source === 'default') ? 'Mamaplaats' : $source;
        }

        $signup_images = Factory_Repository::signup_images()->load_object(array(array('slug', '=', $source)));

        if (!empty($signup_images->advertiser_id)) {
            $advertiser_id = $signup_images->advertiser_id;
        }

        $mailchimp_group = '';
        if (!empty($signup_images->mailchimp_group)) {
            $mailchimp_group = $signup_images->mailchimp_group;
        }

        $messages = array();
        try {
            Factory_Guest::activates_account()->execute($user_id, $key, $source, $newsletter_group, $mailchimp_group, $ref);
        } catch (Exception $e) {
            $messages = array('messages' => array('Geen account gevonden om te activeren'), 'type' => 'error');
        }

        if (!empty($post)) {
            try {
                $user = Factory_Guest::completes_account()->execute($user_id, $key, $this->_filter_post($post));
                $browser = Factory_Repository::browser()->load_object(array(array('user_id', '=', $user->id), array('status', '=', 1)));
                $post['id'] = $user->id;
                $post['email'] = $user->email;
                $post['newsletter'] = $user->newsletter;

                $messages = array(
                    'messages' => array('Bedankt voor het registreren van je account.'),
                    'type' => 'success',
                    'source' => $source,
                );

                Auth::instance()->force_login($post['email']);
                if (!empty($browser)) {
                    $browser->status = 0;
                    Factory_Repository::browser()->update($browser);
                    $this->redirect(URL::site($browser->uri . '?referrer=true'));
                }

            } catch (Validate_Exception $e) {
                $messages = array('messages' => $e->errors, 'type' => 'error');
            }
        }


        $this->view = new View_Guest_Activate(
            $post,
            $this->_select_left_panel($source),
            Kohana::$config->load('info_arrays'),
            $messages,
            $newsletter_group,
            $source,
            $advertiser_id
        );
    }

    private function _merge_date(array $date)
    {
        // Return empty if field is empty
        if (empty($date['day']) OR empty($date['month']) OR empty($date['year'])) {
            return '';
        }

        return $date['year'] . '-' . $date['month'] . '-' . $date['day'];
    }

    private function _filter_post($post)
    {
        // First check the pregnancy date
        $post['pregnancy_due_date'] = $this->_merge_date($post['pregnancy_due_date']);
        $post['children'] = (!empty($post['children'])) ? $post['children'] : array();

        // Now check the children
        foreach ($post['children'] as $i => $child) {
            $child['birthdate'] = $this->_merge_date($child['birthdate']);
            $post['children'][$i] = $child;
        }

        return $post;
    }

    private function _select_left_panel($source)
    {
        $registration_panels = Kohana::$config->load('info_arrays')->get('registration_panels');
        if (array_key_exists($source, $registration_panels)) {
            return $registration_panels[$source];
        }

        return $registration_panels['default'];
    }
}