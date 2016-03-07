<?php

interface Repository_Review_Product {
	/**
	 * @param array $parameters
	 * @return Entity_Review_Product
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Review_Product[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param string $user_id
	 * @return Entity_Review_Product[]
	 */
	public function load_set_for_user($user_id);

	/**
	 * @param string $status
	 * @param int $limit
	 * @param int $offset
	 * @param string $search
	 * @return Entity_Review_Product[]
	 */
	public function load_set_by_status($status, $limit = NULL, $offset = NULL, $search = '');

	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL);

	/**
	 * @param Entity_Review_Product $entity
	 * @return Entity_Review_Product
	 */
	public function create($entity);

	/**
	 * @param Entity_Review_Product $entity
	 * @return Entity_Review_Product
	 */
	public function update($entity);

	/**
	 * @param Entity_Review_Product $entity
	 * @return Entity_Review_Product
	 */
	public function delete($entity);
}