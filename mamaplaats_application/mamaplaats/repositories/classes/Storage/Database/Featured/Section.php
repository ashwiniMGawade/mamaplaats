<?php

class Storage_Database_Featured_Section extends Storage_Database implements Repository_Featured_Section
{
	protected $_table_name = 'featured_sections';
	protected $_entity_class = 'Entity_Featured_Section';

	public function load_object(array $parameters)
	{
		$section = parent::load_object($parameters);
		if ( ! empty($section->id))
		{
			$section->blocks = $this->_load_blocks($section);
		}

		return $section;
	}

	public function create($entity)
	{
		$entity = parent::create($entity);
		$this->_update_blocks($entity);

		return $entity;
	}

	public function update($entity)
	{
		$entity = parent::update($entity);
		$this->_update_blocks($entity);

		return $entity;
	}

	private function _load_blocks(Entity_Featured_Section $section)
	{
		return $this->_query_builder->select()
			->from('featured_section_blocks')
			->where('featured_section_id', '=', $section->id)
			->execute($this->_database)
			->as_array();
	}

	private function _update_blocks(Entity_Featured_Section $section)
	{
		$block_ids = array();
		foreach ($section->blocks as $block)
		{
			$block_ids[] = $block['id'];
			$block['featured_section_id'] = $section->id;

			if (empty($block['id']))
			{
				$insert = $this->_query_builder->insert();
				$insert->table('featured_section_blocks')->columns(array_keys($block))->values($block);

				$block_ids[] = $insert->execute($this->_database)[0];
			}
			else
			{
				$update = $this->_query_builder->update();
				$update->table('featured_section_blocks')->set($block)->where('id', '=', $block['id'])->execute($this->_database);
			}
		}

		$delete = $this->_query_builder->delete();
		$delete->table('featured_section_blocks')->where('featured_section_id', '=', $section->id);

		if ( ! empty($block_ids))
		{
			$delete->and_where('id', 'NOT IN', $block_ids);
		}

		$delete->execute($this->_database);
	}
}