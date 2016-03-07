<?php

interface Repository_Media {

	/**
	 * @param array $parameters
	 * @return Entity_Media
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Media[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param string $linked_name
	 * @param string $linked_id
	 * @return Entity_Media[]
	 */
	public function load_set_linked($linked_name, $linked_id, $extra_fields = array());

	/**
	 * @param Entity_Media $entity
	 * @return Entity_Media
	 */
	public function create($entity);

	/**
	 * @param Entity_Media $entity
	 * @param string $linked_name
	 * @param string $linked_id
	 * @param array $extra_fields
	 * @return Entity_Media
	 */
	public function link($entity, $linked_name, $linked_id, $extra_fields = array());

	/**
	 * @param Entity_Media $entity
	 * @return Entity_Media
	 */
	public function update($entity);

	/**
	 * @param Entity_Media $entity
	 * @return Entity_Media
	 */
	public function delete($entity);
}