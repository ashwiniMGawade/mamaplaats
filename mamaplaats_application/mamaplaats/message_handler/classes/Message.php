<?php

interface Message {

	/**
	 * @param string $name
	 * @param array $parameters
	 * @return mixed
	 */
	public function send($name, array $parameters);
}

