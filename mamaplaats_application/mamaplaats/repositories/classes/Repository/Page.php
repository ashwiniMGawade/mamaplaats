<?php

interface Repository_Page {

	/**
	 * @param array $parameters
	 * @return Entity_Page
	 */
	public function load_object(array $parameters);

	/**
	 * @param string $id
	 * @return array
	 */
	public function load_meta_info($id);

	/**
	 * @param array $parameters
	 * @return Entity_Page[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Page $entity
	 * @return Entity_Page
	 */
	public function create($entity);

	/**
	 * @param Entity_Page $entity
	 * @return Entity_Page
	 */
	public function update($entity);

	/**
	 * @param Entity_Page $entity
	 * @return Entity_Page
	 */
	public function delete($entity);

	/**
	 * @param array $parameters
	 * @param string $order_by
	 * @param string $direction
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Page[]
	 */
	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL);
}