<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Base extends Controller {

	protected $auto_render = TRUE;
	protected $view;

	protected $auth_user;

	public function before()
	{
		parent::before();

		try
		{
			$auth = Auth::instance();
		}
		catch (Session_Exception $e)
		{
			// Destroy the sessions and reload when having a session error
			session_destroy();

			$auth = Auth::instance();
		}

		if ($auth->logged_in())
		{
			$this->auth_user = $auth->get_user();
		}
		elseif ($auth_user = $auth->auto_login())
		{
			$this->auth_user = $auth_user;
		}

		$this->_search_for_alternative();
	}

	public function after()
	{
		// Render the view
		if (isset($this->view) AND $this->auto_render === TRUE)
		{
			$renderer = Kostache_Layout::factory();

			$this->view->header = $this->_render_header();
			$this->view->footer = $this->_render_footer();
			$this->view->version = trim(file_get_contents('VERSION'));
			$this->view->options = Kohana::$config->load('settings');
			$this->view->show_advertisement_popup = Factory_Repository::advertisement_popup()->load_object(array(array('slug', '=', 'advertisement-popup')));

			if (Kohana::PRODUCTION === Kohana::$environment)
			{
				$this->response->body(
					$renderer->render($this->view)
				);
			}
			else
			{
				$this->response->body(
					$renderer->render($this->view).View::factory('profiler/stats')->render()
				);
			}
		}
		elseif ($this->auto_render === TRUE)
		{
			$this->response->body(
				'<h1>No template found for View_'
				.Request::current()->controller().'_'
				.Request::current()->action().'!</h1>'
			);
		}
	}

	private function _render_header()
	{
		$menu_items = Kohana::$config->load('core_config')->get('header_menu');
		$uri = $this->request->uri();
        $core_config = Kohana::$config->load('core_config');
        $unread_inbox_message_count = 0;
        if (!empty($this->auth_user))
        {
            $inbox_message_count = Factory_Repository::conversation()->get_unread_inbox_message_count($this->auth_user->id);
            $unread_inbox_message_count = $inbox_message_count[0]['unread_message_count'];
        }

		$timeline = ( ! empty($this->auth_user->id)) ? Factory_User::gets_timeline()->execute($this->auth_user->id, 4) : array();

		return Kostache::factory()->render(new View_Header($this->auth_user, $menu_items, $uri, $timeline, $this->request, $core_config, $unread_inbox_message_count));
	}

	private function _render_footer()
	{
		$core_config = Kohana::$config->load('core_config');
		$menu_items = $core_config->get('footer_menu');
		$partners = $core_config->get('partners');

		return Kostache::factory()->render(new View_Footer($menu_items, $partners, $this->request));
	}

	private function _search_for_alternative()
	{
		$uri    =   $this->request->uri();
		$seo_redirect = Factory_Repository::seo_redirect()->load_object(array(
			array('from_url', '=', $uri),
		));

		if ( ! empty($seo_redirect))
		{
			$url    =   URL::site($seo_redirect->to_url);
			return $this->redirect($url, 301);
		}

		return false;
	}
}