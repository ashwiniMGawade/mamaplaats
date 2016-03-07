<?php

class Controller_Api_Advise extends Controller_Base {

	public function action_list()
	{
		$this->auto_render = FALSE;

		$category_slug  = $this->request->query('category_slug');
		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$advise_list 	= Factory_Guest::gets_advise_list()->execute($category_slug, $limit, $offset);

		$rendered_list = Kostache::factory()->render(new View_Advise_Items($advise_list));

		$this->response->body($rendered_list);
	}
}