<?php

class Usecase_Editor_UpdatesReviewProduct {

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

	/**
	 * @var Review_SyncSections
	 */
	private $_review_sync_sections;

	public function __construct($repository_review_product, $validate_review_product, $media_update, $review_sync_sections)
	{
		$this->_repository_review_product = $repository_review_product;
		$this->_validate_review_product = $validate_review_product;
		$this->_media_update = $media_update;
		$this->_review_sync_sections = $review_sync_sections;
	}

	public function execute($product_id, array $fields)
	{
		$product = $this->_repository_review_product->load_object(array(array('id', '=', $product_id)));
		$product->modified = date('Y-m-d');
		$product->set_fields($fields);

		$this->_validate_review_product($product);

		$product = $this->_repository_review_product->update($product);
		$this->_update_media_items($product->id, $fields['media']);

		$this->_review_sync_sections->sync_by_product_id($product->id);

		return $product;
	}

	public function _validate_review_product(Entity_Review_Product $product)
	{
		$this->_validate_review_product->load($product->as_array());
		$this->_validate_review_product->default_rules();

		if ($this->_validate_review_product->check() !== TRUE)
		{
			Throw new Validate_Exception('This review product is invalid !', $this->_validate_review_product->errors(), $product);
		}
	}

	public function _update_media_items($product_id, $media_items)
	{
		foreach ($media_items as $media_item)
		{
			$this->_media_update->update('review_product', $product_id, 1, $media_item);
		}
	}
}