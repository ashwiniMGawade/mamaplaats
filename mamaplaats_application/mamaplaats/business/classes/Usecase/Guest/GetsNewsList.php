<?php

class Usecase_Guest_GetsNewsList {

	/**
	 * @var Repository_Article
	 */
	private $_repository_article;

	public function __construct($repository_article)
	{
		$this->_repository_article = $repository_article;
	}

	public function execute($category_slug)
	{
		if(!empty($category_slug))
		{
			return $this->_repository_article->load_set_by_slug($category_slug);
		}
		else
		{
			return $this->_repository_article->load_set(array());
		}
	}
}