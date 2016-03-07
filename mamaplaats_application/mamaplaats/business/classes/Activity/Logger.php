<?php

class Activity_Logger {

	/**
	 * @var Repository_Activity
	 */
	private $_repository_activity;

	/**
	 * @var Activity_Converter
	 */
	private $_activity_converter;

	public function __construct($repository_activity, $activity_converter)
	{
		$this->_repository_activity = $repository_activity;
		$this->_activity_converter 	= $activity_converter;
	}

	public function log($user, $activity, $object)
	{
		if (method_exists($this->_activity_converter, $activity))
		{
			$entity_activity = $this->_activity_converter->$activity($user, $object);
			$this->_repository_activity->create($entity_activity);
		}
	}
}