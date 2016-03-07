<?php

interface Repository_Blog {

	/**
	 * @param array $parameters
	 * @return Entity_Blog
	 */
	public function load_object(array $parameters);

	/**
	 * @param string $id
	 * @return array
	 */
	public function load_meta_info($id);

	/**
	 * @param array $parameters
	 * @return Entity_Blog[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Blog $entity
	 * @return Entity_Blog
	 */
	public function create($entity);

	/**
	 * @param Entity_Blog $entity
	 * @return Entity_Blog
	 */
	public function update($entity);

	/**
	 * @param Entity_Blog $entity
	 * @return Entity_Blog
	 */
	public function delete($entity);

	/**
	 * @param mixed $category_ids
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Blog[]
	 */
	public function load_set_by_category_id($category_ids, $limit = 10, $offset = 0);

	/**
	 * @deprecated This should be replaced with Repository_Blog::load_set_by_category_id
	 *
	 * @see Repository_Blog::load_set_by_category_id
	 * @param int $blog_id
	 * @param int $limit
	 * @return Entity_Blog[]
	 */
	public function load_set_related($blog_id, $limit = 10);

	/**
	 * @param array $parameters
	 * @param string $order_by
	 * @param string $direction
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Blog[]
	 */
	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL);

	/**
	 * @deprecated This should be replaced with Repository_Blog::load_set_advanced
	 *
	 * @see Repository_Blog::load_set_advanced
	 * @param int $author_id
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_Blog[]
	 */
	public function load_latest_with_limit($author_id = 1, $limit = 15, $offset = 0);

	/**
	 * @param Entity_Blog $entity
	 * @return Entity_Blog
	 */
	public function increase_view_count($entity);
}