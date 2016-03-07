<?php

class Storage_Database_Coupon_Slide extends Storage_Database implements Repository_Coupon_Slide {

	protected $_table_name 		= 'coupon_slides';
	protected $_entity_class 	= 'Entity_Coupon_Slide';

	public function load_set_ordered(array $parameters)
	{
		$select = $this->_query_builder->select();

		$select->from($this->_table_name);
		$select->as_object($this->_entity_class);
		$select->order_by('order', 'ASC');

		$this->where($select, $parameters);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}
}