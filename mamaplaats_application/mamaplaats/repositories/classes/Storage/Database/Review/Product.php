<?php

class Storage_Database_Review_Product extends Storage_Database implements Repository_Review_Product {

	protected $_table_name 		= 'review_products';
	protected $_entity_class 	= 'Entity_Review_Product';

	public function load_object(array $parameters)
	{
		$product = parent::load_object($parameters);

		if ( ! empty($product->id))
		{
			$product->sections = $this->_load_sections($product);
			$product->ratings = $this->_load_ratings($product);
			$product->remarks = $this->_load_remarks($product);
		}

		return $product;
	}

	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL)
	{
		$select = $this->_query_builder->select();
		$select->from(array($this->_table_name, 'review_product'));
		$this->where($select, $parameters);

		if ($order_by !== NULL)
		{
			$select->order_by($order_by, $direction);
		}

		if ($limit !== NULL AND $offset !== NULL)
		{
			$select->limit($limit);
			$select->offset($offset);
		}

		$results = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$review_product = new $this->_entity_class($result);
			$results[] = $review_product;
		}

		return $results;
	}

	public function load_set_for_user($user_id)
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'review_products.*',
			'reviews.user_id',
			array('reviews.id', 'review_id'),
			array('reviews.slug', 'review_slug'),
			array('reviews.status', 'review_status')
		))
		->from('review_products')
		->join('reviews', 'LEFT')
		->on('review_products.id', '=', 'reviews.review_product_id')
		->on('reviews.user_id', '=', DB::expr($user_id))
		->order_by('review_products.application_end_date', 'DESC');

		$review_products = array();
		foreach ($select->execute($this->_database) as $review_product)
		{
			$review_products[] = array(
				'review_product' => new Entity_Review_Product($review_product),
				'review' => new Entity_Review(array(
					'id' => $review_product['review_id'],
					'user_id' => $review_product['user_id'],
					'slug' => $review_product['review_slug'],
					'status' => $review_product['review_status'],
				)),
			);
		}

		return $review_products;
	}

	public function load_set_by_status($status, $limit = NULL, $offset = NULL, $search = '')
	{
		$select = $this->_query_builder->select();
		$select->select_array(array(
			'review_products.*',
			DB::expr('AVG(reviews.rating_overal) as average_rating'),
		))
		->from('review_products')
		->join('reviews', 'LEFT')
		->on('review_products.id', '=', 'reviews.review_product_id')
		->on('reviews.status', '=', DB::expr("'published'"))
		->where('review_products.status', '=', $status)
		->group_by('review_products.id')
		->order_by('review_products.application_end_date', 'DESC');

		if ($limit !== NULL AND $offset !== NULL)
		{
			$select->limit($limit);
			$select->offset($offset);
		}

		if ( ! empty($search))
		{
			$select->where('review_products.title', 'LIKE', '%'.$search.'%');
		}

		$review_products = array();
		foreach ($select->execute($this->_database) as $review_product)
		{
			$product = new Entity_Review_Product($review_product);
			$product->average_rating = $review_product['average_rating'];

			$review_products[] = $product;
		}

		return $review_products;
	}

	public function create($entity)
	{
		$product = parent::create($entity);
		$this->_update_sections($product);
		$this->_update_ratings($product);
		$this->_update_remarks($product);

		return $product;
	}

	public function update($entity)
	{
		$product = parent::update($entity);
		$this->_update_sections($product);
		$this->_update_ratings($product);
		$this->_update_remarks($product);

		return $product;
	}

	private function _load_sections(Entity_Review_Product $product)
	{
		return $this->_query_builder->select()
			->from('review_product_sections')
			->where('review_product_id', '=', $product->id)
			->execute($this->_database)
			->as_array();
	}

	private function _update_sections(Entity_Review_Product $product)
	{
		$section_ids = array();
		foreach ($product->sections as $section)
		{
			$section_ids[] = $section['id'];
			$section['review_product_id'] = $product->id;

			if (empty($section['id']))
			{
				$insert = $this->_query_builder->insert();
				$insert->table('review_product_sections')->columns(array_keys($section))->values($section);

				$section_ids[] = $insert->execute($this->_database)[0];
			}
			else
			{
				$update = $this->_query_builder->update();
				$update->table('review_product_sections')->set($section)->where('id', '=', $section['id'])->execute($this->_database);
			}
		}

		$delete = $this->_query_builder->delete();
		$delete->table('review_product_sections')->where('review_product_id', '=', $product->id);

		if ( ! empty($section_ids))
		{
			$delete->and_where('id', 'NOT IN', $section_ids);
		}

		$delete->execute($this->_database);
	}

	private function _load_ratings(Entity_Review_Product $product)
	{
		return $this->_query_builder->select()
			->from('review_product_ratings')
			->where('review_product_id', '=', $product->id)
			->execute($this->_database)
			->as_array();
	}

	private function _update_ratings(Entity_Review_Product $product)
	{
		$rating_ids = array();
		foreach ($product->ratings as $rating)
		{
			$rating_ids[] = $rating['id'];
			$rating['review_product_id'] = $product->id;

			if (empty($rating['id']))
			{
				$insert = $this->_query_builder->insert();
				$insert->table('review_product_ratings')->columns(array_keys($rating))->values($rating);

				$rating_ids[] = $insert->execute($this->_database)[0];
			}
			else
			{
				$update = $this->_query_builder->update();
				$update->table('review_product_ratings')->set($rating)->where('id', '=', $rating['id'])->execute($this->_database);
			}
		}

		$delete = $this->_query_builder->delete();
		$delete->table('review_product_ratings')->where('review_product_id', '=', $product->id);

		if ( ! empty($rating_ids))
		{
			$delete->and_where('id', 'NOT IN', $rating_ids);
		}

		$delete->execute($this->_database);
	}

	private function _load_remarks(Entity_Review_Product $product)
	{
		return $this->_query_builder->select()
			->from('review_product_remarks')
			->where('review_product_id', '=', $product->id)
			->execute($this->_database)
			->as_array();
	}

	private function _update_remarks(Entity_Review_Product $product)
	{
		$table_name = 'review_product_remarks';

		// Delete all old remarks
		$this->_query_builder->delete()->table($table_name)->where('review_product_id', '=', $product->id)->execute($this->_database);

		// Now add the new updated ones
		foreach ($product->remarks as $remark)
		{
			$this->_query_builder->insert()
				->table($table_name)
				->columns(array('review_product_id', 'type', 'remark'))
				->values(array($product->id, $remark['type'], $remark['remark']))
				->execute($this->_database);
		}

		return $product;
	}
}