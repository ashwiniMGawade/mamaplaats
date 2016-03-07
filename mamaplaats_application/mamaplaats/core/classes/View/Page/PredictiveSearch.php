<?php

class View_Page_PredictiveSearch {

	private $_search_result;

	public function __construct($search_result)
	{
		$this->_search_result = $search_result;
	}

	public function get_predictive_search_result()
	{
		$search_results = array();
		foreach ($this->_search_result as $search_result)
		{
			$search_result['page']->created = date('d M y', strtotime($search_result['page']->created));
			$search_results[] = $search_result;
		}
		return $search_results;
	}

}