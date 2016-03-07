<?php

class Controller_Api_Expert extends Controller_Base {

	public function action_list()
	{
		$this->auto_render = FALSE;

		$category_slug  = $this->request->query('category_slug');
		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$expert_list    =   Factory_Guest::gets_expert_list()->execute($category_slug, $limit, $offset);

		$rendered_list = Kostache::factory()->render(new View_Expert_Items($expert_list, NULL));

		$this->response->body($rendered_list);
	}
}