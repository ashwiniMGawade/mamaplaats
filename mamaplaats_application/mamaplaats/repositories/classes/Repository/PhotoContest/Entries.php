<?php

interface Repository_PhotoContest_Entries {
	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest_Entries
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest_Entries[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_PhotoContest_Entries $entity
	 * @return Entity_PhotoContest_Entries
	 */
	public function create($entity);

	/**
	 * @param Entity_PhotoContest_Entries $entity
	 * @return Entity_PhotoContest_Entries
	 */
	public function update($entity);

	/**
	 * @param Entity_PhotoContest_Entries $entity
	 * @return Entity_PhotoContest_Entries
	 */
	public function delete($entity);
}