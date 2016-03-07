<?php
/*
declare absolute path to load mailchimp repositories
*/
require_once($mailchimp_abosolute_path . "./../../mamaplaats/repositories/vendor/Mailchimp/Mailchimp.php");

class MailchimpClass {

	private $mailchimp;

	function __construct($api_key)
	{
		$this->mailchimp = new Mailchimp($api_key);
	}

	public function getListGroups($listId)
	{
		try
		{
			$result = $this->mailchimp->call('lists/interest-groupings', array("id"=>$listId));
		}
		catch(Exception $e)
		{
			$result = $this->_response_error($e->getMessage());
		}

		return $result;
	}

	public function addUsers($listId, $groupingName, $groups, $data)
	{
		if( ! empty($listId) AND ! empty($groups) AND ! empty($data['user_email']))
		{
			$merge_vars = array(
				'EMAIL' 		=> $data['user_email'],
				'FNAME' 		=> $data['first_name'],
				'MNAME' 		=> $data['middle_name'],
				'LNAME' 		=> $data['last_name'],
				'SEX'	 		=> ($data['gender'] == 1) ? 'Man' : 'Vrouw',
				'BIRTHDAY' 		=> $data['birthdate'],
				'PREGNANT' 		=> $data['pregnancy_due_date'],
				'GROUPINGS' 	=> array(
					array(
						'name' => $groupingName,
						'groups' => $groups
					)
				),
			);

			$add_user = array(
				'id'                => $listId,
				'email'             => array('email' => $data['user_email']),
				'merge_vars'        => $merge_vars,
				'email_type'        => false,
				'double_optin'      => false,
				'update_existing'   => true,
				'send_welcome'      => false
			);

			try
			{
				$result = $this->mailchimp->call('lists/subscribe', $add_user);
			}
			catch(Exception $e)
			{
				$result = $this->_response_error($e->getMessage());
			}
		}

		return $result;
	}

	public function createGroup($listId, $groupName, $groupingId)
	{
		$group_details = array(
			'id'=>$listId,
			'group_name' => $groupName,
			'grouping_id' => $groupingId
		);

		try
		{
			$result	= $this->mailchimp->call('lists/interest-group-add',$group_details);
		}
		catch(Exception $e)
		{
			$result = $this->_response_error($e->getMessage());
		}

		return $result;
	}

	public function processGroup($listId, $groupName)
	{
		$result = $this->_response_error('No grouping to add group');
		$groups = $this->getListGroups($listId);

		if( ! empty($groups))
		{
			$list_groups = array();

			//0 Index is checking groups for grouping ID Doelgroup only
			if(isset($groups[0]['groups']))
			{
				$groupingId = $groups[0]['id'];
				$groupingName = $groups[0]['name'];
				foreach($groups[0]['groups'] as $group)
				{
					$groupId = $group['id'];
					$list_groups[$groupId] = $group['name'];
				}
			}

			if( ! isset($groupingId) OR empty($groupingId))
			{
				return $this->_response_error('Invalid Grouping ID');
			}

			$add_groups = array($groupName, 'Mamaplaats');

			//if group does not exists then create a new group in grouping
			if( ! in_array($groupName, $list_groups))
			{
				$group_results = $this->createGroup($listId, $groupName, $groupingId);

				if(isset($group_results['complete']) AND $group_results['complete']==1)
				{
					return $this->_group_success_response($groupingName, $add_groups);
				}

				return $group_results;
			}

			$result = $this->_group_success_response($groupingName, $add_groups);
		}

		return $result;
	}

	private function _group_success_response($groupingName, $groups)
	{
		return array(
			'type' => 'success',
			'grouping_name' => $groupingName,
			'groups' => $groups
		);
	}

	private function _response_error($message)
	{
		return array(
			'type' => 'error',
			'message' => $message
		);
	}
}