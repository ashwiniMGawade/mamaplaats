<?php

class Storage_Database_Browser extends Storage_Database implements Repository_Browser {

	protected $_table_name = 'browser_info';
	protected $_entity_class = 'Entity_Browser';

	public function load_object(array $parameters)
	{
		$browser = parent::load_object($parameters);
		return $browser;
	}

	public function create($entity)
	{
		$browser = parent::create($entity);
		return $browser;
	}

	public function update($entity)
	{
		$browser = parent::update($entity);
		return $browser;
	}
}