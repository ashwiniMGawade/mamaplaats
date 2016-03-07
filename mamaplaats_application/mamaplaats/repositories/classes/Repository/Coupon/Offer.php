<?php

interface Repository_Coupon_Offer {

	/**
	 * @param int $amount
	 * @return Entity_Coupon_Offer
	 */
	public function get_most_popular($amount);

	/**
	 * @param int $amount
	 * @return Entity_Coupon_Offer
	 */
	public function get_newest($amount);

	/**
	 * @param int $category
	 * @param int $amount
	 * @return Entity_Coupon_Offer
	 */
	public function get_most_popular_for_category($category, $amount);

	/**
	 * @param string $type
	 * @return Entity_Coupon_Offer
	 */
	public function get_by_type($type);

	/**
	 * @param int $shop_id
	 * @return Entity_Coupon_Offer
	 */
	public function get_for_shop($shop_id);

	/**
	 * @param int $category_id
	 * @return Entity_Coupon_Offer
	 */
	public function get_for_category($category_id);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Offer
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Offer[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Coupon_Offer $entity
	 * @return Entity_Coupon_Offer
	 */
	public function create($entity);

	/**
	 * @param Entity_Coupon_Offer $entity
	 * @return Entity_Coupon_Offer
	 */
	public function update($entity);

	/**
	 * @param Entity_Coupon_Offer $entity
	 * @return Entity_Coupon_Offer
	 */
	public function delete($entity);
}