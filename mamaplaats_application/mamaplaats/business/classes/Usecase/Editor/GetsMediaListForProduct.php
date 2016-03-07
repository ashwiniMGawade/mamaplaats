<?php

class Usecase_Editor_GetsMediaListForProduct {

	/**
	 * @var Repository_Media
	 */
	private $_repository_media;

	public function __construct($repository_media)
	{
		$this->_repository_media = $repository_media;
	}

	public function execute($product_id)
	{
		return $this->_repository_media->load_set_linked('review_product', $product_id);
	}
}