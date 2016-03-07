<?php

interface Repository_Win {

	/**
	 * @param array $parameters
	 * @return Entity_Win
	 */
	public function load_object(array $parameters);

	/**
	 * @param string $id
	 * @return array
	 */
	public function load_meta_info($id);

	/**
	 * @param array $parameters
	 * @param string $order_by
	 * @param string $direction
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Win[]
	 */
	public function load_set_advanced(array $parameters, $order_by, $direction, $limit = NULL, $offset = NULL);

	/**
	 * @param array $parameters
	 * @return Entity_Win[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Win $entity
	 * @return Entity_Win
	 */
	public function create($entity);

	/**
	 * @param Entity_Win $entity
	 * @return Entity_Win
	 */
	public function update($entity);

	/**
	 * @param Entity_Win $entity
	 * @return Entity_Win
	 */
	public function delete($entity);

	/**
	 * @param int $category_id
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Win[]
	 */
	public function load_set_by_category_id($category_id, $limit = 10, $offset = 0);

	/**
	 * @param Entity_Win $entity
	 * @return Entity_Win
	 */
	public function increase_view_count($entity);
}