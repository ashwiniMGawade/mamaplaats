<?php

class Controller_Api_Author extends Controller_Base {

	public function action_blog()
	{
		$this->auto_render = FALSE;

		$author_slug  	= $this->request->query('author_slug');
		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$author 		= Factory_Guest::gets_author_info()->execute($author_slug, $limit, $offset);

		$rendered_list = Kostache::factory()->render(new View_Author_Blog($author));

		$this->response->body($rendered_list);
	}
}