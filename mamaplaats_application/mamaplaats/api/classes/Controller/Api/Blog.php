<?php

class Controller_Api_Blog extends Controller_Base {

	public function action_list()
	{
		$this->auto_render = FALSE;

		$category_slug  = $this->request->query('category_slug');
		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$blog_list 		= Factory_Guest::gets_blog_list()->execute($category_slug, $limit, $offset);

		$rendered_list = Kostache::factory()->render(new View_Blog_Items($blog_list));

		$this->response->body($rendered_list);
	}
}