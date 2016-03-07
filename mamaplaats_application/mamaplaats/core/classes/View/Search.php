<?php

class View_Search {

	use View_Helper_Item, View_Helper_Sorting, View_Helper_ImagePath;

	public $search;
	private $_search_results;


	public function __construct($search_results, $search)
	{
		$this->title = 'Zoek resultaten voor "'.$search.'"';
		$this->search = $search;

		$this->_search_results = $search_results;
	}

	public function search_results()
	{
		$results = array();
		foreach ($this->_search_results as $result)
		{
			$type 	= $result['type'];
			$object = $result['object'];
			$method = '_format_'.$type;

			if (method_exists($this, $method))
			{
				$object = $this->{$method}($object);
			}

			$results[] = array('is_'.$type => $object);
		}

		return $results;
	}

	private function _format_blog($blog)
	{
		$blog['media']->path = $this->get_image_legacy($blog['media']->path, 260);
		$blog['blog']->excerpt = $blog['blog']->get_excerpt(140).'...';
		$blog['blog']->created_formatted = strftime('%e %B %G', strtotime($blog['blog']->created));

		return $blog;
	}

	private function _format_advise($advise)
	{
		$advise['media']->path = $this->get_image_legacy($advise['media']->path, 260);
		$advise['advise']->excerpt = $advise['advise']->get_excerpt(140).'...';
		$advise['advise']->created_formatted = strftime('%e %B %G', strtotime($advise['advise']->created));

		return $advise;
	}

	private function _format_review_product($review_product)
	{
		$review_product->average_rating = number_format($review_product->average_rating, 1);
		$review_product->description = substr(strip_tags($review_product->description), 0, 140).'...';
		$review_product->created_formatted = strftime('%e %B %G', strtotime($review_product->created));

		return array('review_product' => $review_product);
	}
}