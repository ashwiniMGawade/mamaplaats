<?php

interface Repository_PhotoContest_Rewards {
	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest_Rewards
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_PhotoContest_Rewards[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_PhotoContest_Rewards $entity
	 * @return Entity_PhotoContest_Rewards
	 */
	public function create($entity);

	/**
	 * @param Entity_PhotoContest_Rewards $entity
	 * @return Entity_PhotoContest_Rewards
	 */
	public function update($entity);

	/**
	 * @param Entity_PhotoContest_Rewards $entity
	 * @return Entity_PhotoContest_Rewards
	 */
	public function delete($entity);
}