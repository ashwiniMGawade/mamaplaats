<?php

class Storage_Database_Coupon_Shop extends Storage_Database implements Repository_Coupon_Shop {

	protected $_table_name 		= 'coupon_shops';
	protected $_entity_class 	= 'Entity_Coupon_Shop';

	public function get_most_popular($amount)
	{
		$select = $this->_query_builder->select();
		$select->from($this->_table_name)
			->where('is_popular', '=', 1)
			->order_by('view_count', 'DESC')
			->limit($amount)
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_by_category_id($category_id, $amount)
	{
		$select = $this->_query_builder->select();
		$select->from($this->_table_name)
			->where('coupon_category_id', '=', $category_id)
			->limit($amount)
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}
}