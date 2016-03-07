<?php

class Usecase_Guest_GetsHomePage {

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Repository_Advise
	 */
	private $_repository_advise;

	/**
	 * @var Repository_Win
	 */
	private $_repository_win;

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_blog, $repository_advise, $repository_win, $repository_review_product)
	{
		$this->_repository_blog		= $repository_blog;
		$this->_repository_advise	= $repository_advise;
		$this->_repository_win		= $repository_win;
		$this->_repository_review_product = $repository_review_product;
	}

	public function execute($limit, $offset)
	{
		$blogs 		= $this->_load_blogs($limit, $offset);
		$advise 	= $this->_load_advise(10, $offset);
		$win 		= $this->_load_win(3, $offset);
		$review_product = $this->_load_review_products(2, $offset);

		return array_merge($blogs, $advise, $win, $review_product);
	}

	private function _load_blogs($limit, $offset)
	{
		$blogs = $this->_repository_blog->load_set_advanced(
			array(array('blog.post_status', '=', 'publish')),
			'blog.post_date', 'DESC',
			$limit, $offset
		);

		return $this->_format_results($blogs, 'blog');
	}

	private function _load_advise($limit, $offset)
	{
		$pages = $this->_repository_advise->load_set_advanced(
			array(array('advise.post_status', '=', 'publish')),
			'advise.post_date', 'DESC',
			$limit, $offset
		);

		return $this->_format_results($pages, 'advise');
	}

	private function _load_win($limit, $offset)
	{
		$win = $this->_repository_win->load_set_advanced(
			array(array('win.post_status', '=', 'publish')),
			'win.post_date', 'DESC',
			$limit, $offset
		);

		return $this->_format_results($win, 'win');
	}

	private function _load_review_products($limit, $offset)
	{
		$products = $this->_repository_review_product->load_set_by_status('finished', $limit, $offset);

		$filtered_products = array();
		foreach ($products as $product)
		{
			$filtered_products[]['review_product'] = $product;
		}

		return $this->_format_results($filtered_products, 'review_product');
	}

	private function _format_results($objects, $type)
	{
		$result_array = array();
		foreach ($objects as $object)
		{
			$date = $date = $object[$type]->created;
			$result_array[] = array('type' => $type, 'date' => $date, 'object' => $object);
		}

		return $result_array;
	}
}
