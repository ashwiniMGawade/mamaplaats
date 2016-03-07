<?php

interface Repository_Conversation {

	/**
	 * @param array $parameters
	 * @return Entity_Conversation
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Conversation[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Conversation $entity
	 * @return Entity_Conversation
	 */
	public function create($entity);

	/**
	 * @param Entity_Conversation $entity
	 * @return Entity_Conversation
	 */
	public function update($entity);

	/**
	 * @param Entity_Conversation $entity
	 * @return Entity_Conversation
	 */
	public function delete($entity);

	/**
	 * @param int $user_id
	 * @param int $partner_id
	 * @return Entity_Conversation[]
	 */
	public function get_conversation($user_id, $partner_id);

	/**
	 * @param $user_id
	 * @return array list of user ids that had messages with the user
	 */
	public function get_conversation_partners($user_id);
}