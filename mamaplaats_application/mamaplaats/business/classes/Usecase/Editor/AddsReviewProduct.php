<?php

class Usecase_Editor_AddsReviewProduct {

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	/**
	 * @var Validate_Review_Product
	 */
	private $_validate_review_product;

	/**
	 * @var Media_Update
	 */
	private $_media_update;

	public function __construct($repository_review_product, $validate_review_product, $media_update)
	{
		$this->_repository_review_product = $repository_review_product;
		$this->_validate_review_product = $validate_review_product;
		$this->_media_update = $media_update;
	}

	public function execute(array $fields)
	{
		$product = new Entity_Review_Product($fields);
		$product->user_id = 1;
		$product->sections = Arr::get($fields, 'sections', array());
		$product->ratings = Arr::get($fields, 'ratings', array());
		$product->remarks = Arr::get($fields, 'remarks', array());
		$product->created = date('Y-m-d');
		$product->modified = date('Y-m-d');
		if (empty($product->slug))
		{
			$product->slug = URL::title($product->title);
		}

		$this->_validate_review_product($product);
		$product = $this->_repository_review_product->create($product);

		foreach ($fields['media'] as $media_item)
		{
			$this->_media_update->update('review_product', $product->id, NULL, $media_item);
		}

		return $product;
	}

	public function _validate_review_product(Entity_Review_Product $product)
	{
		$this->_validate_review_product->load($product->as_array());
		$this->_validate_review_product->default_rules();

		if ($this->_validate_review_product->check() !== TRUE)
		{
			throw new Validate_Exception('This review product is invalid !', $this->_validate_review_product->errors(), $product);
		}
	}
}