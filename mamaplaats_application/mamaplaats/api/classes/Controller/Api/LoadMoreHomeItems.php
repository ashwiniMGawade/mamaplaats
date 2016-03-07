<?php

class Controller_Api_LoadMoreHomeItems extends Controller_Base {

	public function action_list()
	{
		$this->auto_render = FALSE;

		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$home_page_items = Factory_Guest::gets_homepage()->execute($limit, $offset);
		$rendered_list = Kostache::factory()->render(new View_LoadMoreHomeItems($home_page_items,  NULL, NULL));
		$this->response->body($rendered_list);
	}
} 