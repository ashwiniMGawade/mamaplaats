<?php

interface Repository_Legacy_Media {

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
	 * @param Entity_Media $entity
	 * @return Entity_Media
	 */
	public function create($entity);

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