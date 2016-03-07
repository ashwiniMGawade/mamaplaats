<?php

class Storage_Database_Review extends Storage_Database implements Repository_Review {

	protected $_table_name 		= 'reviews';
	protected $_entity_class 	= 'Entity_Review';

	private $_select_array 	= array(
		'reviews.*',
		array('users.ID', 'user_id'),
		array('users.user_nicename', 'user_slug'),
		array('users.display_name', 'user_display_name'),
		array('users.first_name', 'user_first_name'),
		array('users.middle_name', 'user_middle_name'),
		array('users.last_name', 'user_last_name'),
		array('users.user_registered', 'user_registration_date'),
		array('users.user_email', 'user_email'),
		array('users.profile_image_ext', 'user_profile_image_ext'),
		array('review_products.id', 'review_product_id'),
		array('review_products.title', 'review_product_title'),
		array('review_products.image_url', 'review_product_image_url'),
	);

	public function load_object(array $parameters)
	{
		$review = parent::load_object($parameters);
		$review->sections = $this->_load_sections($review);
		$review->ratings = $this->_load_ratings($review);
		$review->remarks = $this->_load_remarks($review);

		return $review;
	}

	public function load_set_advanced(array $parameters, $order_by = NULL, $direction = 'ASC', $limit = NULL, $offset = NULL)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_select_array);
		$select->from('review_products');
		$select->join(array($this->_table_name, 'reviews'), 'LEFT')->on('reviews.review_product_id', '=', 'review_products.id');
		$select->join(array('wp_users', 'users'), 'INNER')->on('reviews.user_id', '=', 'users.ID');

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

		$review = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$review[] = array (
				'review' 	=> new Entity_Review($result),
				'user' 		=> new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'product' 	=> new Entity_Review_Product(Arr::filter_prefixed($result, 'review_product_')),
			);
		}
		return $review;
	}

	public function load_set_by_product_category_id($category_ids, $limit, $offset)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_select_array);
		$select->from('review_products');
		$select->join(array($this->_table_name, 'reviews'), 'LEFT')->on('reviews.review_product_id', '=', 'review_products.id');
		$select->join(array('wp_users', 'users'), 'INNER')->on('reviews.user_id', '=', 'users.ID');
		$select->where('review_products.category_id', 'IN', $category_ids);
		$select->and_where('reviews.status', '=', 'approved');
		$select->limit($limit);
		$select->offset($offset);

		$review = array();
		foreach ($select->execute($this->_database) as $result)
		{
			$review[] = array (
				'review' => new Entity_Review($result),
				'user' 	=> new Entity_User(Arr::filter_prefixed($result, 'user_')),
				'product' => new Entity_Review_Product(Arr::filter_prefixed($result, 'review_product_')),
			);

		}
		return $review;
	}

	public function load_set_with_users(array $parameters)
	{
		$select = $this->_query_builder->select();
		$select->select_array($this->_select_array);

		$select->from($this->_table_name);
		$select->join(array('wp_users', 'users'), 'INNER')->on('reviews.user_id', '=', 'users.ID');
		$select->join(array('review_products', 'review_products'), 'LEFT')->on('reviews.review_product_id', '=', 'review_products.id');
		$this->where($select, $parameters);

		$results = array();
		foreach ($select->execute($this->_database) as $review)
		{
			$results[] = array(
				'review' 	=> new Entity_Review($review),
				'user' 		=> new Entity_User(Arr::filter_prefixed($review, 'user_')),
				'product' 	=> new Entity_Review_Product(Arr::filter_prefixed($review, 'review_product_')),
			);
		}
		return $results;
	}

	public function update($entity)
	{
		$entity = parent::update($entity);
		$this->_update_sections($entity);
		$this->_update_ratings($entity);
		$this->_update_remarks($entity);

		return $entity;
	}

	public function mass_update_status(array $parameters, $status)
	{
		$update = $this->_query_builder->update();
		$update->table($this->_table_name);
		$update->set(array('status' => $status));

		$this->where($update, $parameters);

		$update->execute($this->_database);

		return TRUE;
	}

	public function mass_delete(array $parameters)
	{
		$delete = $this->_query_builder->delete();
		$delete->table($this->_table_name);

		$this->where($delete, $parameters);

		$delete->execute($this->_database);

		return TRUE;
	}

	private function _load_sections(Entity_Review $review)
	{
		return $this->_query_builder->select()
			->select_array(array('review_sections.*', 'review_product_sections.question'))
			->from('review_sections')
			->join('review_product_sections', 'LEFT')->on('review_product_section_id', '=', 'review_product_sections.id')
			->where('review_id', '=', $review->id)
			->execute($this->_database)
			->as_array();
	}

	private function _update_sections(Entity_Review $review)
	{
		$section_ids = array();
		foreach ($review->sections as $section)
		{
			// Unset wrong fields
			unset($section['question']);

			$section_ids[] = $section['id'];
			$section['review_id'] = $review->id;

			if (empty($section['id']))
			{
				$insert = $this->_query_builder->insert();
				$insert->table('review_sections')->columns(array_keys($section))->values($section);

				$section_ids[] = $insert->execute($this->_database)[0];
			}
			else
			{
				$update = $this->_query_builder->update();
				$update->table('review_sections')->set($section)->where('id', '=', $section['id'])->execute($this->_database);
			}
		}

		$delete = $this->_query_builder->delete();
		$delete->table('review_sections')->where('review_id', '=', $review->id);

		if ( ! empty($section_ids))
		{
			$delete->and_where('id', 'NOT IN', $section_ids);
		}

		$delete->execute($this->_database);
	}

	private function _load_ratings(Entity_Review $review)
	{
		return $this->_query_builder->select()
			->select_array(array('review_ratings.*', 'review_product_ratings.rating_title'))
			->from('review_ratings')
			->join('review_product_ratings', 'LEFT')->on('review_product_rating_id', '=', 'review_product_ratings.id')
			->where('review_id', '=', $review->id)
			->execute($this->_database)
			->as_array();
	}

	private function _update_ratings(Entity_Review $review)
	{
		$rating_ids = array();
		foreach ($review->ratings as $rating)
		{
			// Unset wrong fields
			unset($rating['rating_title']);

			$rating_ids[] = $rating['id'];
			$rating['review_id'] = $review->id;

			if (empty($rating['id']))
			{
				$insert = $this->_query_builder->insert();
				$insert->table('review_ratings')->columns(array_keys($rating))->values($rating);

				$rating_ids[] = $insert->execute($this->_database)[0];
			}
			else
			{
				$update = $this->_query_builder->update();
				$update->table('review_ratings')->set($rating)->where('id', '=', $rating['id'])->execute($this->_database);
			}
		}

		$delete = $this->_query_builder->delete();
		$delete->table('review_ratings')->where('review_id', '=', $review->id);

		if ( ! empty($rating_ids))
		{
			$delete->and_where('id', 'NOT IN', $rating_ids);
		}

		$delete->execute($this->_database);
	}

	private function _load_remarks(Entity_Review $review)
	{
		$select = $this->_query_builder->select();
		$select->select();
		$select->from('review_remarks');
		$select->where('review_id', '=', $review->id);
		$result = $select->execute($this->_database);

		return $result->as_array();
	}

	private function _update_remarks(Entity_Review $review)
	{
		$table_name = 'review_remarks';

		// Delete all old remarks
		$this->_query_builder->delete()->table($table_name)->where('review_id', '=', $review->id)->execute($this->_database);

		// Now add the new updated ones
		foreach ($review->remarks as $remark)
		{
			$this->_query_builder->insert()
				->table($table_name)
				->columns(array('review_id', 'type', 'remark'))
				->values(array($review->id, $remark['type'], $remark['remark']))
				->execute($this->_database);
		}

		return $review;
	}
}