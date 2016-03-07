<?php

interface Repository_User_Token {

	/**
	 * @param array $parameters
	 * @return Entity_User_Token
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_User_Token[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_User_Token $entity
	 * @return Entity_User_Token
	 */
	public function create($entity);

	/**
	 * @param Entity_User_Token $entity
	 * @return Entity_User_Token
	 */
	public function update($entity);

	/**
	 * @param Entity_User_Token $entity
	 * @return Entity_User_Token
	 */
	public function delete($entity);
}