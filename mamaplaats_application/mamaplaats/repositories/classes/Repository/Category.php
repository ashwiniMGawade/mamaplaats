<?php

interface Repository_Category {

	/**
	 * @param array $parameters
	 * @return Entity_Category
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Category[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Category $entity
	 * @return Entity_Category
	 */
	public function create($entity);

	/**
	 * @param Entity_Category $entity
	 * @return Entity_Category
	 */
	public function update($entity);

	/**
	 * @param Entity_Category $entity
	 * @return Entity_Category
	 */
	public function delete($entity);

	/**
	 * @param $category_id
	 * @param $item_id
	 * @return mixed
	 */
	public function create_item_link($category_id, $item_id);

	/**
	 * @param $item_id
	 * @return array item_link
	 */
	public function get_item_link($item_id);
}