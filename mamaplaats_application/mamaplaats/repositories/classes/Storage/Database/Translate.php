<?php


class Storage_Database_Translate extends Storage_Database
{
	protected $_field_translate = array();

	public function load_object(array $parameters)
	{
		$select = $this->_query_builder->select();

		$select->select_array($this->_get_select_fields());
		$select->from($this->_table_name);
		$select->as_object($this->_entity_class);

		$parameters = $this->_translate_paramenters($parameters);
		$this->where($select, $parameters);

		return $select->execute($this->_database)->current();
	}

	public function load_set(array $parameters)
	{
		$select = $this->_query_builder->select();

		$select->select_array($this->_get_select_fields());
		$select->from($this->_table_name);
		$select->as_object($this->_entity_class);

		$parameters = $this->_translate_paramenters($parameters);
		$this->where($select, $parameters);

		$results = array();
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function create($entity)
	{
		if ($entity->id)
		{
			throw new Exception('Cannot create a loaded object');
		}

		$insert = $this->_query_builder->insert();
		$properties = $this->get_reflection($entity);

		$columns = array();
		$values = array();
		foreach ($properties as $p)
		{
			// Don't insert array fields
			if (is_array($entity->{$p->getName()}))
			{
				continue;
			}

			$columns[] = array_search($p->getName(), $this->_field_translate);
			$values[] = $entity->{$p->getName()};
		}

		$query = $insert->table($this->_table_name)->columns($columns)->values($values)->execute($this->_database);
		$entity->id = $query[0];

		return $entity;
	}

	public function update($entity)
	{
		if ( ! $entity->id)
		{
			throw new Exception('Cannot update a non-loaded object');
		}

		$update = $this->_query_builder->update();
		$properties = $this->get_reflection($entity);

		$set = array();
		foreach ($properties as $p)
		{
			// Don't insert array fields
			if (is_array($entity->{$p->getName()}))
			{
				continue;
			}

			$name = array_search($p->getName(), $this->_field_translate);
			$set[$name] = $entity->{$p->getName()};
		}

		$id_field = array_search('id', $this->_field_translate);
		$updated = $update->table($this->_table_name)->where($id_field, '=', $entity->id)->set($set)->execute($this->_database);

		return $entity;
	}

	public function delete($entity)
	{
		if ( ! $entity->id)
		{
			throw new Exception('Cannot delete a non-loaded object');
		}

		$delete = $this->_query_builder->delete();

		$id_field = array_search('id', $this->_field_translate);
		return (bool) $delete->table($this->_table_name)->where($id_field, '=', $entity->id)->execute($this->_database);
	}

	protected function _get_select_fields()
	{
		$select_fields = array();
		foreach ($this->_field_translate as $database_field => $translate_field)
		{
			$select_fields[] = array($this->_table_name.'.'.$database_field, $translate_field);
		}

		return $select_fields;
	}

	protected function _translate_paramenters($parameters)
	{
		foreach ($parameters as $i => $parameter)
		{
			$parameters[$i][0] = $this->_table_name.'.'.array_search($parameter[0], $this->_field_translate);
		}

		return $parameters;
	}
}