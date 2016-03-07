<?php

class Usecase_Editor_AddsCouponShop {

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_shop;

	/**
	 * @var Validate_Coupon_Shop
	 */
	private $_validate_shop;

	public function __construct($repository_shop, $validate_shop)
	{
		$this->_repository_shop = $repository_shop;
		$this->_validate_shop = $validate_shop;
	}

	public function execute(array $fields)
	{
		$shop = new Entity_Coupon_Shop;
		$shop->coupon_category_id 	= Arr::get($fields, 'coupon_category_id', '');
		$shop->slug 				= Arr::get($fields, 'slug', '');
		$shop->name 				= Arr::get($fields, 'name', '');
		$shop->title 				= Arr::get($fields, 'title', '');
		$shop->description 			= Arr::get($fields, 'description', '');
		$shop->about 				= Arr::get($fields, 'about', '');
		$shop->url 					= Arr::get($fields, 'url', '');
		$shop->is_popular 			= Arr::get($fields, 'is_popular', 0);
		$shop->external_id 			= Arr::get($fields, 'external_id', '');

		if (empty($shop->slug))
		{
			$shop->slug = URL::title($shop->name);
		}

		$this->_validate_shop($shop);

		return $this->_repository_shop->create($shop);
	}

	private function _validate_shop(Entity_Coupon_Shop $shop)
	{
		$this->_validate_shop->load($shop->as_array());
		$this->_validate_shop->default_rules();

		if ($this->_validate_shop->check() !== TRUE)
		{
			throw new Validate_Exception('This coupon shop is invalid !', $this->_validate_shop->errors(), $shop);
		}
	}
}