<?php defined('SYSPATH') or die('No direct access');

class Controller_Error_Handler extends Controller_WordPress {

	public function before()
	{
		parent::before();

		// Internal request only!
		if (Request::current()->is_initial())
		{
			$this->request->action(404);
		}

		$this->response->status((int) $this->request->action());
	}

	public function action_404()
	{
		$this->response->status(404);

		$page = URL::site(rawurldecode(Request::initial()->uri()));
		$this->view = new View_Error_Handler_404($page);
	}

	public function action_503()
	{
		$this->template->title = 'Maintenance Mode';
	}

	public function action_500()
	{
		$this->template->title = 'Internal Server Error';
	}
}