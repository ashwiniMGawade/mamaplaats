<?php

interface Repository_Newsletter_Subscriber {

	/**
	 * @param array $email
	 * @return mixed
	 */
	public function load_object(array $email);
	public function create($entity);
	public function update($entity);
	public function replace($entity);
	public function delete($entity);
}