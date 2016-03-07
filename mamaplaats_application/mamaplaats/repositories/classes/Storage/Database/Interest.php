<?php

class Storage_Database_Interest extends Storage_Database implements Repository_Interest {

	protected $_table_name = 'interests';
	protected $_entity_class = 'Entity_Interest';

	public function load_user_interests($user_id)
	{
		$select = $this->_query_builder->select();
		$query = $select->select('interests.*', array('usr_intr.id', 'selected'))
			->from('interests')
			->join(array('wp_users_interests', 'usr_intr'), 'LEFT')
			->on('usr_intr.interest_id', '=', 'interests.id')
			->on('usr_intr.user_id', '=', DB::expr($user_id));

		$interests = array();
		foreach ($query->execute($this->_database) as $interest_array)
		{
			$interest = new Entity_Interest($interest_array);
			$interest->selected = $interest_array['selected'];

			$interests[] = $interest;
		}

		return $interests;
	}

	public function update_user_interests($user_id, $interest_ids)
	{
		// Delete all interest connections
		$delete = $this->_query_builder->delete();
		$delete->table('wp_users_interests')->where('user_id', '=', $user_id)->execute($this->_database);

		foreach ($interest_ids as $interest_id)
		{
			$insert = $this->_query_builder->insert();
			$insert->table('wp_users_interests')
				->columns(array('user_id', 'interest_id'))
				->values(array($user_id, $interest_id))
				->execute($this->_database);
		}
	}
}