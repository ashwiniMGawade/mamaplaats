<?php

interface Repository_User_Child {

	/**
	 * @param array $parameters
	 * @return Entity_User_Child
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_User_Child[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_User_Child $entity
	 * @return Entity_User_Child
	 */
	public function create($entity);

	/**
	 * @param Entity_User_Child $entity
	 * @return Entity_User_Child
	 */
	public function update($entity);

	/**
	 * @param Entity_User_Child $entity
	 * @return Entity_User_Child
	 */
	public function delete($entity);
}