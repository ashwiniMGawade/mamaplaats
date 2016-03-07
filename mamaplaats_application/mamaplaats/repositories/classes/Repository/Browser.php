<?php

interface Repository_Browser {

	/**
	 * @param array $parameters
	 * @return Entity_Browser
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Browser[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Browser $entity
	 * @return Entity_Browser
	 */
	public function create($entity);

	/**
	 * @param Entity_Browser $entity
	 * @return Entity_Browser
	 */
	public function update($entity);

	/**
	 * @param Entity_Browser $entity
	 * @return Entity_Browser
	 */
	public function delete($entity);
}