<?php

class Controller_Page extends Controller_Base {

	public function action_index()
	{
		try
		{
			$page = Factory_Guest::gets_page()->execute($this->request->param('page_slug'));
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$this->view = new View_Page_Index($page, $this->auth_user);
	}

	public function action_list()
	{
		$category_slug = $this->request->param('slug');
		$page_list = Factory_Guest::gets_page_list()->execute($category_slug, 1);

		if ( ! empty($_GET['search-term']))
		{
			$query = array(
				'term' => $_GET['search-term'],
				'category' => $category_slug
			);
			$page_list = Factory_Guest::search_page_category()->execute($query, 15);
		}

		$this->view = new View_Page_List($page_list, $category_slug);
	}

	public function	action_predictive_search()
	{
		$this->auto_render = FALSE;

		$search_result = Factory_Guest::search_page_category()->execute($_GET, 3);

		$this->view = new View_Page_PredictiveSearch($search_result);
		$search_result = $this->view->get_predictive_search_result();

		$this->response->body(json_encode($search_result));
	}

	private function _get_extra_fields()
	{
		return array(
			'blog_url'	=> URL::base(TRUE),
			'referrer'	=> $this->request->referrer(),
			'page_url'	=> $this->request->url(),
			'agent'		=> $_SERVER['HTTP_USER_AGENT'],
			'ip' 		=> $_SERVER['REMOTE_ADDR'],
		);
	}
}