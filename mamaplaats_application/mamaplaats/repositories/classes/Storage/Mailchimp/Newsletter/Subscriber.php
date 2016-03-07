<?php

class Storage_Mailchimp_Newsletter_Subscriber extends Storage_Mailchimp implements Repository_Newsletter_Subscriber
{
	public function load_object(array $email)
	{
		$subscribers = $this->_mailchimp->lists->memberInfo($this->_list_id, array($email));
		if ( ! empty($subscribers['data'][0]))
		{
			return $this->_convert_mailchimp_to_entity($subscribers['data'][0]);
		}

		return FALSE;
	}

	public function create($entity)
	{
		$id = array('email' => $entity->email);

		$newsletter_group = $entity->newsletter_group;
		if ( ! empty($newsletter_group) AND $newsletter_group == 1)
		{
			$subscriber = $this->_convert_entity_to_mailchimp($entity, $newsletter_group);

			$return_data = $this->_mailchimp->lists->subscribe($this->_list_id, $id, $subscriber, 'html', FALSE, FALSE, FALSE);

			if ($entity->newsletter == 0)
			{
				return $return_data;
			}
		}

		$subscriber = $this->_convert_entity_to_mailchimp($entity);

		return $this->_mailchimp->lists->subscribe($this->_list_id, $id, $subscriber, 'html', FALSE, FALSE, FALSE);
	}

	public function update($entity)
	{
		$id = array('email' => $entity->email);
		$subscriber = $this->_convert_entity_to_mailchimp($entity);

		return $this->_mailchimp->lists->updateMember($this->_list_id, $id, $subscriber);
	}

	public function replace($entity)
	{
		$id = array('email' => $entity->email);
		$subscriber = $this->_convert_entity_to_mailchimp($entity);

		return $this->_mailchimp->lists->subscribe($this->_list_id, $id, $subscriber, 'html', TRUE, TRUE, TRUE);
	}

	public function delete($entity)
	{
		return $this->_mailchimp->lists->unsubscribe($this->_list_id, $entity->email, FALSE, FALSE, FALSE);
	}

	private function _set_entity_to_mailchimp($entity, $newsletter_group = false)
	{
		$mailchimp_user = array(
			'EMAIL' 		=> $entity->email,
			'FNAME' 		=> $entity->first_name,
			'MNAME' 		=> $entity->middle_name,
			'LNAME' 		=> $entity->last_name,
			'PHONE' 		=> $entity->phone_number,
			'SEX'	 		=> ($entity->gender == 1) ? 'Man' : 'Vrouw',
			'BIRTHDAY' 		=> $entity->birthdate,
			'PREGNANT' 		=> $entity->pregnancy_due_date,
			'BLOG_COUNT'    => $entity->blog_count,
			'GROUPINGS' 	=> array(
				array('name' => 'Doelgroep', 'groups' => $entity->sources),
				array('name' => 'Nieuwsbrieven', 'groups' => $entity->newsletters),
			),
		);

		return $mailchimp_user;
	}

	private function _convert_entity_to_mailchimp($entity, $newsletter_group = false)
	{
		$mailchimp_user = $this->_set_entity_to_mailchimp($entity, $newsletter_group);

		foreach ($entity->children as $key => $child)
		{
			$number = $key + 1;
			if ($number > 5)
			{
				break;
			}

			$mailchimp_user = array_merge($mailchimp_user, array(
				'NAMECHILD'.$number => $child['first_name'],
				'SEXCHILD'.$number 	=> ($child['gender'] == 1) ? 'Man' : 'Vrouw',
				'DATECHILD'.$number => $child['birthdate'],
			));
		}

		return $mailchimp_user;
	}

	private function _convert_mailchimp_to_entity($subscriber)
	{
		$fields = $subscriber['merges'];

		$children = array();
		for ($i=1; $i<5; $i++)
		{
			if ( ! empty($fields['NAMECHILD'.$i]))
			{
				$children[] = array(
					'name' 		=> $fields['NAMECHILD'.$i],
					'gender' 	=> ($fields['SEXCHILD'.$i] == 'Man') ? 1 : 2,
					'birthdate' => $fields['DATECHILD'.$i],
				);
			}
		}

		return new Entity_Newsletter_Subscriber(array(
			'id' 			=> $subscriber['id'],
			'status'		=> $subscriber['status'],
			'email' 		=> $fields['EMAIL'],
			'first_name' 	=> $fields['FNAME'],
			'middle_name' 	=> $fields['MNAME'],
			'last_name' 	=> $fields['LNAME'],
			'gender' 		=> ($fields['SEX'] == 'Man') ? 1 : 2,
			'birthdate' 	=> $fields['BIRTHDAY'],
			'pregnancy_due_date' => $fields['PREGNANT'],
			'children' 		=> $children,
			'sources' 		=> $this->_convert_groups_to_list($fields['GROUPINGS'], 0),
			'newsletters' 	=> $this->_convert_groups_to_list($fields['GROUPINGS'], 1),
		));
	}

	private function _convert_groups_to_list($groupings, $group_num)
	{
		$groups = array();
		foreach ($groupings[$group_num]['groups'] as $group)
		{
			if ($group['interested'] == 1)
			{
				$groups[] = $group['name'];
			}
		}

		return $groups;
	}
}