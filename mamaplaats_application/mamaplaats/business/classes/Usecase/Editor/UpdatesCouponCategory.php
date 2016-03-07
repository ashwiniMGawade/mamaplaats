<?php

class Usecase_Editor_UpdatesCouponCategory {

	/**
	 * @var Repository_Coupon_Category
	 */
	private $_repository_category;

	/**
	 * @var Validate_Coupon_Category
	 */
	private $_validate_category;

	public function __construct($repository_category, $validate_category)
	{
		$this->_repository_category = $repository_category;
		$this->_validate_category = $validate_category;
	}

	public function execute($category_id, array $fields)
	{
		$category = $this->_repository_category->load_object(array(array('id', '=', $category_id)));
		$category->slug = Arr::get($fields, 'slug', '');
		$category->icon = Arr::get($fields, 'icon', '');
		$category->name = Arr::get($fields, 'name', '');
		$category->description = Arr::get($fields, 'description', '');
		$category->is_popular = Arr::get($fields, 'is_popular', 0);

		if (empty($category->slug))
		{
			$category->slug = URL::title($category->name);
		}

		$this->_validate_category($category);

		return $this->_repository_category->update($category);
	}

	private function _validate_category(Entity_Coupon_Category $category)
	{
		$this->_validate_category->load($category->as_array());
		$this->_validate_category->default_rules();

		if ($this->_validate_category->check() !== TRUE)
		{
			throw new Validate_Exception('This coupon category is invalid !', $this->_validate_category->errors(), $category);
		}
	}
}