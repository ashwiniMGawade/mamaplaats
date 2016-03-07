<?php

interface Repository
{
	/**
	 * @param array $parameters list of tuple (name, op, value)
	 * @return Entity
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters list of tuple (name, op, value)
	 * @return Entity[]
	 */
	public function load_set(array $parameters);

	public function create($entity);
	public function update($entity);
	public function delete($entity);
}