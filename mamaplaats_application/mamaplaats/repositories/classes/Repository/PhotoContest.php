<?php

interface Repository_PhotoContest {
	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_PhotoContest $entity
	 * @return Entity_PhotoContest
	 */
	public function create($entity);

	/**
	 * @param Entity_PhotoContest $entity
	 * @return Entity_PhotoContest
	 */
	public function update($entity);

	/**
	 * @param Entity_PhotoContest $entity
	 * @return Entity_PhotoContest
	 */
	public function delete($entity);
}