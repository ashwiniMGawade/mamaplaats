<?php

interface Repository_Follower {

	/**
	 * @param array $parameters
	 * @return Entity_Follower
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Follower[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_User $entity
	 * @return Entity_Follower
	 */
	public function create($entity);

	/**
	 * @param Entity_User $entity
	 * @return Entity_Follower
	 */
	public function update($entity);

	/**
	 * @param Entity_User $entity
	 * @return Entity_Follower
	 */
	public function delete($entity);

	/**
	 * @param $user_id
	 * @param $following_id
	 * @return boolean
	 */
	public function add_following($user_id, $following_id);

	/**
	 * @param $follower_id
	 * @param $following_id
	 * @return boolean
	 */
	public function check_if_following($follower_id, $following_id);

	/**
	 * @param $user_id
	 * @param $following_id
	 * @return boolean
	 */
	public function delete_following($user_id, $following_id);

	/**
	 * @param $follower_id
	 * @return Entity_Follower[]
	 */
	public function get_following($follower_id);

	/**
	 * @param $following_id
	 * @return Entity_Follower[]
	 */
	public function get_followers($following_id);

	/**
	 * @param $user_id
	 * @param $limit
	 * @return Entity_Follower[]
	 */
	public function get_follow_suggestions($follower_id, $is_pregnant, $child_amount, $child_start_date, $child_end_date, $limit);

	/**
	 * @param $follower_id
	 * @return array users
	 */
	public function get_following_users($follower_id);
}