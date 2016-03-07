<?php

class Storage_Database_Coupon_Category extends Storage_Database implements Repository_Coupon_Category {

	protected $_table_name 		= 'coupon_categories';
	protected $_entity_class 	= 'Entity_Coupon_Category';

	public function get_most_popular($amount)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_categories.*',
			array(DB::expr('COUNT(coupon_offers.id)'), 'coupon_offer_count')))
			->from($this->_table_name)
			->join('coupon_offers', 'LEFT')
			->on('coupon_category_id', '=', 'coupon_categories.id')
			->on('coupon_offers.start_date', '<=', DB::expr("'".date('Y-m-d')."'"))
			->on('coupon_offers.end_date', '>=', DB::expr("'".date('Y-m-d')."'"))
			->where('coupon_categories.is_popular', '=', 1)
			->group_by('coupon_categories.id')
			->limit($amount)
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_all()
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_categories.*',
			array(DB::expr('COUNT(coupon_offers.id)'), 'coupon_offer_count')))
			->from($this->_table_name)
			->join('coupon_offers', 'LEFT')
			->on('coupon_category_id', '=', 'coupon_categories.id')
			->on('coupon_offers.start_date', '<=', DB::expr("'".date('Y-m-d')."'"))
			->on('coupon_offers.end_date', '>=', DB::expr("'".date('Y-m-d')."'"))
			->group_by('coupon_categories.id')
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}
}