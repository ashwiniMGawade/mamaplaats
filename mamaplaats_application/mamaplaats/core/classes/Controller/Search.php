<?php

class Controller_Search extends Controller_Base {

	public function action_search()
	{
		$search = $this->request->query('search');
		$search_results = Factory_Guest::searches()->execute($search);

		$this->view = new View_Search($search_results, $search);
	}
}