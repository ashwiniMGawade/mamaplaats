<?php

interface Repository_Comment {
	/**
	 * @param array $parameters
	 * @return Entity_Comment
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Comment[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Comment $entity
	 * @return Entity_Comment
	 */
	public function create($entity);

	/**
	 * @param Entity_Comment $entity
	 * @return Entity_Comment
	 */
	public function update($entity);

	/**
	 * @param Entity_Comment $entity
	 * @return Entity_Comment
	 */
	public function delete($entity);

	/**
	 * @param array $parameters
	 * @param null $order_by
	 * @param string $direction
	 * @param null $limit
	 * @param null $offset
	 * @return Entity_Comment[]
	 */
	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL);
}