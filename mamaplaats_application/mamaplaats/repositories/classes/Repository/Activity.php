<?php

interface Repository_Activity {
	/**
	 * @param array $parameters
	 * @return Entity_Activity
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Activity[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Activity $entity
	 * @return Entity_Activity
	 */
	public function create($entity);

	/**
	 * @param Entity_Activity $entity
	 * @return Entity_Activity
	 */
	public function update($entity);

	/**
	 * @param Entity_Activity $entity
	 * @return Entity_Activity
	 */
	public function delete($entity);

	/**
	 * @param $user_id int
	 * @param $limit int amount of activities
	 * @return mixed
	 */
	public function load_from_following($user_id, $limit);
}