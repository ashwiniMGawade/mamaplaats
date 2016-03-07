<?php

interface Repository_Coupon_Slide {

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Slide
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Slide[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Coupon_Slide[]
	 */
	public function load_set_ordered(array $parameters);

	/**
	 * @param Entity_Coupon_Slide $entity
	 * @return Entity_Coupon_Slide
	 */
	public function create($entity);

	/**
	 * @param Entity_Coupon_Slide $entity
	 * @return Entity_Coupon_Slide
	 */
	public function update($entity);

	/**
	 * @param Entity_Coupon_Slide $entity
	 * @return Entity_Coupon_Slide
	 */
	public function delete($entity);
}