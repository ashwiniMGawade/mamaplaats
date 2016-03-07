<?php

interface Repository_User {

	/**
	 * @param array $parameters
	 * @return Entity_User
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_User
	 */
	public function load_user_info($parameters);

	/**
	 * @param array $parameters
	 * @return Entity_User[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_User $entity
	 * @return Entity_User
	 */
	public function create($entity);

	/**
	 * @param Entity_User $entity
	 * @return Entity_User
	 */
	public function update($entity);

	/**
	 * @param Entity_User $entity
	 * @return Entity_User
	 */
	public function delete($entity);

	/**
	 * @param string $first_letter
	 * @return array author list
	 */
	public function get_author_list($first_letter);

	/**
	 * @param string $search_term
	 * @param int $limit
	 * @param int $offset
	 * @return Entity_User[]
	 */
	public function get_by_search_term($search_term, $limit = NULL, $offset = NULL);

	/**
	 * @param string $user_id
	 * @return array user statistics
	 */
	public function load_user_statistics($user_id);

	/**
	 * @param int $limit
	 * @return Entity_User[]
	 */
	public function load_set_latest_active($limit = 15);

	/**
	 * @return array user total users to update extension
	 */
	public function count_users_to_update_image_extension();

	/**
	 * @param int $limit
	 * @param int $offset
	 * @return array users
	 */
	public function get_users_to_update_image_extension($limit = NULL, $offset = NULL);
}