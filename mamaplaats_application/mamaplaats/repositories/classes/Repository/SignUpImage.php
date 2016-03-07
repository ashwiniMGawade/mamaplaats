<?php

interface Repository_SignUpImage {

	/**
	 * @param array $parameters
	 * @return Entity_SignUpImage
	 */
	public function load_object(array $parameters);

	/**
	 * @return array groups
	 */
	public function get_group_list();
}