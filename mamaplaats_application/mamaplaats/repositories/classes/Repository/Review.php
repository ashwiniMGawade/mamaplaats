<?php

interface Repository_Review {
	/**
	 * @param array $parameters
	 * @return Entity_Review
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Review[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param $category_ids
	 * @param $limit
	 * @param $offset
	 * @return Entity_Review[]
	 */
	public function load_set_by_product_category_id($category_ids, $limit, $offset);

	/**
	 * @param array $parameters
	 * @param null $order_by
	 * @param string $direction
	 * @param null $limit
	 * @param null $offset
	 * @return Entity_Review[]
	 */
	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL);

	/**
	 * @param array $parameters
	 * @return Entity_Review[]
	 */
	public function load_set_with_users(array $parameters);

	/**
	 * @param Entity_Review $entity
	 * @return Entity_Review
	 */
	public function create($entity);

	/**
	 * @param Entity_Review $entity
	 * @return Entity_Review
	 */
	public function update($entity);

	/**
	 * @param array $parameters
	 * @param string $status
	 * @return bool
	 */
	public function mass_update_status(array $parameters, $status);

	/**
	 * @param Entity_Review $entity
	 * @return Entity_Review
	 */
	public function delete($entity);

	/**
	 * @param array $parameters
	 * @return bool
	 */
	public function mass_delete(array $parameters);
}