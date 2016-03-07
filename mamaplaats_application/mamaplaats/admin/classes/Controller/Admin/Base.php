<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Base extends Controller {

	protected $auto_render = TRUE;
	protected $view;

	protected $auth_user;

	public function before()
	{
		parent::before();

		$auth = Auth::instance();
		if ($auth->logged_in())
		{
			$this->auth_user = $auth->get_user();
		}
		elseif ($auth_user = $auth->auto_login())
		{
			$this->auth_user = $auth_user;
		}

		// Only Allow the Admin account
		if (empty($this->auth_user->id) OR $this->auth_user->id !== '1')
		{
			throw new HTTP_Exception_404('Not Found');
		}
	}

	public function after()
	{
		// Render the view
		if (isset($this->view) AND $this->auto_render === TRUE)
		{
			$renderer = Kostache_Layout::factory('admin/layout');

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
}