<?php

class Storage_Database_Coupon_Offer extends Storage_Database implements Repository_Coupon_Offer {

	protected $_table_name 		= 'coupon_offers';
	protected $_entity_class 	= 'Entity_Coupon_Offer';

	public function get_newest($amount)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_offers.*',
			array('coupon_shops.name', 'coupon_shop_name'),
			array('coupon_shops.slug', 'coupon_shop_slug')))
			->from($this->_table_name)
			->join('coupon_shops', 'INNER')->on('coupon_shop_id', '=', 'coupon_shops.id')
			->where('coupon_offers.start_date', '<=', date('Y-m-d'))
			->and_where('coupon_offers.end_date', '>=', date('Y-m-d'))
			->order_by('start_date', 'DESC')
			->limit($amount)
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_most_popular($amount)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_offers.*',
			array('coupon_shops.name', 'coupon_shop_name'),
			array('coupon_shops.slug', 'coupon_shop_slug')))
			->from($this->_table_name)
			->join('coupon_shops', 'INNER')->on('coupon_shop_id', '=', 'coupon_shops.id')
			->where('coupon_offers.start_date', '<=', date('Y-m-d'))
			->and_where('coupon_offers.end_date', '>=', date('Y-m-d'))
			->order_by(DB::expr('click_outs / DATEDIFF(CURDATE(), created)'), 'DESC')
			->limit($amount)
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_most_popular_for_category($category_id, $amount)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_offers.*',
			array('coupon_shops.name', 'coupon_shop_name'),
			array('coupon_shops.slug', 'coupon_shop_slug')))
			->from($this->_table_name)
			->join('coupon_shops', 'INNER')->on('coupon_shop_id', '=', 'coupon_shops.id')
			->where('coupon_offers.coupon_category_id', '=', $category_id)
			->and_where('coupon_offers.start_date', '<=', date('Y-m-d'))
			->and_where('coupon_offers.end_date', '>=', date('Y-m-d'))
			->order_by(DB::expr('click_outs / DATEDIFF(CURDATE(), created)'), 'DESC')
			->limit($amount)
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_by_type($type)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_offers.*',
			array('coupon_shops.name', 'coupon_shop_name'),
			array('coupon_shops.slug', 'coupon_shop_slug')))
			->from($this->_table_name)
			->join('coupon_shops', 'INNER')->on('coupon_shop_id', '=', 'coupon_shops.id')
			->where('coupon_offers.type', '=', $type)
			->and_where('coupon_offers.start_date', '<=', date('Y-m-d'))
			->and_where('coupon_offers.end_date', '>=', date('Y-m-d'))
			->order_by('start_date', 'DESC')
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_for_shop($shop_id)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_offers.*',
			array('coupon_shops.name', 'coupon_shop_name'),
			array('coupon_shops.slug', 'coupon_shop_slug')))
			->from($this->_table_name)
			->join('coupon_shops', 'INNER')->on('coupon_shop_id', '=', 'coupon_shops.id')
			->where('coupon_offers.coupon_shop_id', '=', $shop_id)
			->and_where('coupon_offers.start_date', '<=', date('Y-m-d'))
			->and_where('coupon_offers.end_date', '>=', date('Y-m-d'))
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}

	public function get_for_category($category_id)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'coupon_offers.*',
			array('coupon_shops.name', 'coupon_shop_name'),
			array('coupon_shops.slug', 'coupon_shop_slug')))
			->from($this->_table_name)
			->join('coupon_shops', 'INNER')->on('coupon_shop_id', '=', 'coupon_shops.id')
			->where('coupon_offers.coupon_category_id', '=', $category_id)
			->and_where('coupon_offers.start_date', '<=', date('Y-m-d'))
			->and_where('coupon_offers.end_date', '>=', date('Y-m-d'))
			->as_object($this->_entity_class);

		$results = [];
		foreach ($select->execute($this->_database) as $entity)
		{
			$results[] = $entity;
		}

		return $results;
	}
}