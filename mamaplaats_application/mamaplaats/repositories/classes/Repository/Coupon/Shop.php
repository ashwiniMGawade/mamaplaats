<?php

interface Repository_Coupon_Shop {

	/**
	 * @param int $amount
	 * @return Entity_Coupon_Shop
	 */
	public function get_most_popular($amount);

	/**
	 * @param int $category_id
	 * @param int $amount
	 * @return Entity_Coupon_Shop
	 */
	public function get_by_category_id($category_id, $amount);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Shop
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Shop[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Coupon_Shop $entity
	 * @return Entity_Coupon_Shop
	 */
	public function create($entity);

	/**
	 * @param Entity_Coupon_Shop $entity
	 * @return Entity_Coupon_Shop
	 */
	public function update($entity);

	/**
	 * @param Entity_Coupon_Shop $entity
	 * @return Entity_Coupon_Shop
	 */
	public function delete($entity);
}