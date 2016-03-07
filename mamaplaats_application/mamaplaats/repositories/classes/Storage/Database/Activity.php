<?php

class Storage_Database_Activity extends Storage_Database implements Repository_Activity {
	protected $_table_name = 'activities';
	protected $_entity_class = 'Entity_Activity';

	public function load_from_following($user_id, $limit = '')
	{
		$select = $this->_query_builder->select();
		$follower_ids = $select->select('follower_id')
			->from('followers')
			->where('following_id', '=', $user_id)
			->execute($this->_database)
			->as_array(NULL, 'follower_id');

		// Add main account to the default followers
		if ($user_id != 1 AND ! in_array(1, $follower_ids))
		{
			$follower_ids[] = 1;
		}

		$select = $this->_query_builder->select();
		$select->from($this->_table_name)
			->where('user_id', 'IS', NULL)->or_where('user_id', 'IN', $follower_ids)
			->order_by('date', 'DESC');

		if ( ! empty($limit))
		{
			$select->limit($limit);
		}

		$activities = array();
		foreach ($select->execute($this->_database) as $activity)
		{
			$activities[] = new Entity_Activity($activity);
		}

		return $activities;
	}
}