<?php

interface Repository_Featured_Section {

	/**
	 * @param array $parameters
	 * @return Entity_Featured_Section
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Featured_Section[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Featured_Section $entity
	 * @return Entity_Featured_Section
	 */
	public function create($entity);

	/**
	 * @param Entity_Featured_Section $entity
	 * @return Entity_Featured_Section
	 */
	public function update($entity);

	/**
	 * @param Entity_Featured_Section $entity
	 * @return Entity_Featured_Section
	 */
	public function delete($entity);
}