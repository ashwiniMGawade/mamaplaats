<?php

interface Repository_Interest {
	/**
	 * @param array $parameters
	 * @return Entity_Interest
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Interest[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param string $user_id
	 * @return Entity_Interest[]
	 */
	public function load_user_interests($user_id);

	/**
	 * @param Entity_Interest $entity
	 * @return Entity_Interest
	 */
	public function create($entity);

	/**
	 * @param Entity_Interest $entity
	 * @return Entity_Interest
	 */
	public function update($entity);

	/**
	 * @param string $user_id
	 * @param array $interest_ids
	 */
	public function update_user_interests($user_id, $interest_ids);

	/**
	 * @param Entity_Interest $entity
	 * @return Entity_Interest
	 */
	public function delete($entity);
}