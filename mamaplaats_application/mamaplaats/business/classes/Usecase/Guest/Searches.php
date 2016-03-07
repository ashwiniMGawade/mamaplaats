<?php

class Usecase_Guest_Searches {

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
	private $_repository_review;

	public function __construct($repository_blog, $repository_advise, $repository_win, $repository_review_product)
	{
		$this->_repository_blog		= $repository_blog;
		$this->_repository_advise	= $repository_advise;
		$this->_repository_win		= $repository_win;
		$this->_repository_review	= $repository_review_product;
	}

	public function execute($search, $page = 1)
	{
		$limit = 25;
		$offset = ($limit * $page) - $limit;

		$blogs = $this->_load_blogs($search, $limit, $offset);
		$limit = $limit - count($blogs);

		$advises = array();
		if ($limit > 0)
		{
			$advises = $this->_load_advises($search, $limit, $offset);
			$limit = $limit - count($advises);
		}

		$reviews = array();
		if ($limit > 0)
		{
			$reviews = $this->_load_review_products($search, $limit, $offset);
			$limit = $limit - count($reviews);
		}

		$win = array();
		if ($limit > 0)
		{
			$win = $this->_load_win($search, $limit, $offset);
		}

		return array_merge($blogs, $advises, $reviews, $win);
	}

	private function _load_blogs($search, $limit, $offset)
	{
		$parameters = array(
			array('blog.post_title', 'LIKE', '%'.$search.'%'),
			array('blog.post_status', '=', 'publish'),
		);

		$blogs = $this->_repository_blog->load_set_advanced($parameters, 'blog.view_count', 'DESC', $limit, $offset);

		return $this->_format_results($blogs, 'blog');
	}

	private function _load_advises($search, $limit, $offset)
	{
		$parameters = array(
			array('advise.post_title', 'LIKE', '%'.$search.'%'),
			array('advise.post_status', '=', 'publish'),
		);

		$advises = $this->_repository_advise->load_set_advanced($parameters, 'advise.view_count', 'DESC', $limit, $offset);

		return $this->_format_results($advises, 'advise');
	}

	private function _load_review_products($search, $limit, $offset)
	{
		$review_products = $this->_repository_review->load_set_by_status('finished', $limit, $offset, $search);
		return $this->_format_results($review_products, 'review_product');
	}

	private function _load_win($search, $limit, $offset)
	{
		$parameters = array(
			array('win.post_title', 'LIKE', '%'.$search.'%'),
			array('win.post_status', '=', 'publish'),
		);

		$win = $this->_repository_win->load_set_advanced($parameters, 'win.view_count', 'DESC', $limit, $offset);

		return $this->_format_results($win, 'win');
	}

	private function _format_results($objects, $type)
	{
		$result_array = array();
		foreach ($objects as $object)
		{
			$result_array[] = array('type' => $type, 'object' => $object);
		}

		return $result_array;
	}
}