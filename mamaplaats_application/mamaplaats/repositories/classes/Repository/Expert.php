<?php

interface Repository_Expert {

	/**
	 * @param array $parameters
	 * @return Entity_Expert
	 */
	public function load_object(array $parameters);

	/**
	 * @param string $id
	 * @return array
	 */
	public function load_meta_info($id);

	/**
	 * @param array $parameters
	 * @return Entity_Expert[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Expert $entity
	 * @return Entity_Expert
	 */
	public function create($entity);

	/**
	 * @param Entity_Expert $entity
	 * @return Entity_Expert
	 */
	public function update($entity);

	/**
	 * @param Entity_Expert $entity
	 * @return Entity_Expert
	 */
	public function delete($entity);

	/**
	 * @param mixed $category_ids
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Expert[]
	 */
	public function load_set_by_category_id($category_ids, $limit = 10, $offset = 0);

	/**
	 * @deprecated This should be replaced with Repository_Expert::load_set_by_category_id
	 *
	 * @see Repository_Expert::load_set_by_category_id
	 * @param int $blog_id
	 * @param int $limit
	 * @return Entity_Expert[]
	 */
	public function load_set_related($blog_id, $limit = 10);

	/**
	 * @param array $parameters
	 * @param string $order_by
	 * @param string $direction
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Expert[]
	 */
	public function load_set_advanced(array $parameters, $order_by, $direction, $limit = NULL, $offset = NULL);

	/**
	 * @param Entity_Expert $entity
	 * @return Entity_Expert
	 */
	public function increase_view_count($entity);
}