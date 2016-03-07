<?php

interface Repository_PhotoContest_Votes {
	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest_Votes
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest_Votes[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_PhotoContest_Votes $entity
	 * @return Entity_PhotoContest_Votes
	 */
	public function create($entity);

	/**
	 * @param Entity_PhotoContest_Votes $entity
	 * @return Entity_PhotoContest_Votes
	 */
	public function update($entity);

	/**
	 * @param Entity_PhotoContest_Votes $entity
	 * @return Entity_PhotoContest_Votes
	 */
	public function delete($entity);
}