<?php

class Controller_Home extends Controller_Base {

	public function action_index()
	{
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 20);
		$offset = Arr::get($query, 'offset', 0);

		$homepage = Factory_Guest::gets_homepage()->execute($limit, $offset);
		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			'ActiveAuthors' => NULL,
			'LatestComments' => NULL,
		));

		$featured_section = Factory_Featured_Section::load('home');

		$this->view = new View_Home($homepage, $widgets->return_data(), $featured_section);
	}
}