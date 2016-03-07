<?php

interface Repository_Coupon_Category {

	/**
	 * @param int $amount
	 * @return Entity_Coupon_Category
	 */
	public function get_most_popular($amount);

	/**
	 * @return Entity_Coupon_Category
	 */
	public function get_all();

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Category
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Category[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Coupon_Category $entity
	 * @return Entity_Coupon_Category
	 */
	public function create($entity);

	/**
	 * @param Entity_Coupon_Category $entity
	 * @return Entity_Coupon_Category
	 */
	public function update($entity);

	/**
	 * @param Entity_Coupon_Category $entity
	 * @return Entity_Coupon_Category
	 */
	public function delete($entity);
}