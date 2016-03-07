<?php

interface Repository_Seo_Redirect {

	/**
	 * @param array $parameters
	 * @return Entity_Seo_Redirect
	 */
	public function load_object(array $parameters);

	/**
	 * @param array $parameters
	 * @return Entity_Seo_Redirect[]
	 */
	public function load_set(array $parameters);

	/**
	 * @param Entity_Seo_Redirect $entity
	 * @return Entity_Seo_Redirect
	 */
	public function create($entity);

	/**
	 * @param Entity_Seo_Redirect $entity
	 * @return Entity_Seo_Redirect
	 */
	public function update($entity);

	/**
	 * @param Entity_Seo_Redirect $entity
	 * @return Entity_Seo_Redirect
	 */
	public function delete($entity);
}