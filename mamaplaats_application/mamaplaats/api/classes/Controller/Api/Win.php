<?php

class Controller_Api_Win extends Controller_Base {

	public function action_list()
	{
		$this->auto_render = FALSE;

		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$win_list	 	= Factory_Guest::gets_win_list()->execute($limit, $offset);

		$rendered_list = Kostache::factory()->render(new View_Win_ClosedItems($win_list));

		$this->response->body($rendered_list);
	}
}