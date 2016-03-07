<?php

class Controller_User extends Controller_Base {

	public function before()
	{
		parent::before();
	}

	public function action_login()
	{
		$messages = array();
		if ($post = $this->request->post())
		{
			$remember = ($post['remember_me']) ? TRUE : FALSE;

			try
			{
				$auth = Auth::instance();
				if ($auth->login(strtolower($post['username']), $post['password'], $remember))
				{
					Factory_User::login_success()->execute($auth->get_user()->id);

					$this->_login_redirect($_GET);
				}

				$messages = array('messages' => array('We hebben geen account kunnen vinden met deze Gebruikersnaam / Wachtwoord combinatie'), 'type' => 'error');
			}
			catch (Auth_Exception $e)
			{
				$messages = array('messages' => array('Dit account is nog niet geactiveerd. Kijk in je mail om dit account te activeren'), 'type' => 'error');
			}
		}

		$this->view = new View_User_Login($post, $messages);
	}

	private function _login_redirect($params)
	{
		if( ! empty($params['sso']) AND ! empty($params['sig']))
		{
			$payload = urlencode($params['sso']);
			$signature = urlencode($params['sig']);

			$this->redirect('user/discourse_login?sso='.$payload.'&sig='.$signature);
		}
		$this->redirect(Route::url('user_profile').'?logged_in=success');
	}

	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();

		if ($this->request->referrer())
		{
			$this->redirect($this->request->referrer());
		}
		else
		{
			$this->redirect('/');
		}
	}

	public function	action_predictive_search()
	{
		$this->auto_render = FALSE;
		$search_result = Factory_User::searches_user()->execute($_GET, 5);
		$this->response->body(json_encode($search_result));
	}

	public function action_forum()
	{
		$forum_details = Kohana::$config->load('settings')->get('forum');

		$forum_path = 'Location: '.$forum_details['path'];
		if( ! empty($this->auth_user))
		{
			$forum_path .= '/session/sso?return_path=%2F';
		}

		header($forum_path);
		exit;
	}

	public function action_discourse_login()
	{
		$forum_details = Kohana::$config->load('settings')->get('forum');

		if( ! isset($_GET['sso']) OR empty($_GET['sso']))
		{
			header('Location: '.$forum_details['path'].'/session/sso?return_path=%2F');
			exit;
		}

		// load the payload passed in by Discourse
		$payload = urlencode($_GET['sso']);
		$signature = urlencode($_GET['sig']);
		$access_keys = array(
			'sso' => $payload,
			'sig' => $signature
		);

		if(empty($this->auth_user))
		{
			$this->redirect('user/login?sso='.$payload.'&sig='.$signature);
		}

		$query = Factory_User::discourse_sso()->execute($this->auth_user, $access_keys);

		header('Location: '.$forum_details['path'].'/session/sso_login?' . $query);
		exit;
	}
}