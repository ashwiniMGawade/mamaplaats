<?php

class Storage_Database_Media extends Storage_Database implements Repository_Media{

	protected $_table_name = 'media';
	protected $_entity_class = 'Entity_Media';

	public function load_set_linked($linked_name, $linked_id, $extra_columns = array())
	{
		$select = $this->_query_builder->select();

		$columns = array_merge(array($this->_table_name.'.*'), $extra_columns);

		$select->select_array($columns);
		$select->from($this->_table_name);
		$select->join($linked_name.'s_media');
		$select->on('media.id', '=', 'media_id');
		$select->where($linked_name.'_id', '=', $linked_id);
		$select->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function link($entity, $linked_name, $linked_id, $extra_columns = array())
	{
		if ( ! $entity->id)
		{
			throw new Exception('Cannot link a non-loaded object');
		}

		$select = $this->_query_builder->select()
			->from($linked_name.'s_media')
			->where($linked_name.'_id', '=', $linked_id)
			->and_where('media_id', '=', $entity->id)
			->execute($this->_database)
			->current();

		$columns = array_merge(array($linked_name.'_id' => $linked_id,'media_id' => $entity->id), $extra_columns);

		if (empty($select))
		{
			$insert = $this->_query_builder->insert();
			$insert->table($linked_name.'s_media')
				->columns(array_keys($columns))
				->values($columns)
				->execute($this->_database);
		}
		else
		{
			$update = $this->_query_builder->update();
			$update->table($linked_name.'s_media')
				->set($columns)
				->where('id', '=', $select['id'])
				->execute($this->_database);
		}

		return $entity;
	}
}