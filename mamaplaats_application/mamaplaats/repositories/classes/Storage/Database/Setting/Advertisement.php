<?php

class Storage_Database_Setting_Advertisement extends Storage_Database implements Repository_Setting_Advertisement
{
	protected $_table_name = 'advertisements';
	protected $_entity_class = 'Entity_Setting_Advertisement';

	public function load_object(array $parameters)
	{
		$advertisement = parent::load_object($parameters);

		return $advertisement;
	}

	public function create($entity)
	{
		$entity = parent::create($entity);

		return $entity;
	}

	public function update($entity)
	{
		$entity = parent::update($entity);

		return $entity;
	}
}