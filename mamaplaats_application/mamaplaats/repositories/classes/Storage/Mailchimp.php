<?php

class Storage_Mailchimp
{
	/**
	 * @var Mailchimp
	 */
	protected $_mailchimp;
	protected $_list_id;
	protected $_list_id_mamaplaats_lead_campain;

	public function __construct($mailchimp, $list_id, $list_id_mamaplaats_lead_campain)
	{
		$this->_mailchimp = $mailchimp;
		$this->_list_id = $list_id;
		$this->_list_id_mamaplaats_lead_campain = $list_id_mamaplaats_lead_campain;
	}

	public function get_subscribers_from_static_segment($segment_id)
	{
		$api_key = $this->_mailchimp->api_key;
		$segment_opts = '&segment[match]=all&segment[conditions][0][field]=static_segment&segment[conditions][0][op]=eq&segment[conditions][0][value]='.$segment_id;

		$results = file_get_contents('http://us2.api.mailchimp.com/export/1.0/list/?apikey='.$api_key.'&id='.$this->_list_id.$segment_opts);
		$result_rows 	= explode("\n", $results);
		$header_row 	= json_decode(array_shift($result_rows), TRUE);

		$result = array();
		foreach ($result_rows as $row_id => $row)
		{
			$row = json_decode($row, TRUE);
			if ( ! is_array($row))
			{
				continue;
			}

			foreach ($row as $field_id => $field_value)
			{
				$field_name = $header_row[$field_id];
				$result[$row_id][$field_name] = $field_value;
			}
		}

		return $result;
	}

	public function add_subscribers_to_static_segment($segment_id, array $subscribers_batch)
	{
		return $this->_mailchimp->listStaticSegmentMembersAdd($this->_list_id, $segment_id, $subscribers_batch);
	}

	public function reset_static_segment($segment_id)
	{
		return $this->_mailchimp->listStaticSegmentReset($this->_list_id, $segment_id);
	}

	/**
	 * Todo: Does not belong here but making a new class felt like overkill
	 *
	 * @param Model_WP_User $user
	 */
	public function subscribe_or_update(Model_WP_User $user, $groups = 'all', $double_opt = FALSE, $source = FALSE)
	{
		if ($groups == 'all')
		{
			$groups = array('Win', 'Voordeelclub', 'Blog / Advies', 'Partner Aanbieding', 'Testpanels');
		}

		if ($source === FALSE)
		{
			$source = array('Mamaplaats');
		}

		$mailchimp_user = array(
			'EMAIL' 		=> $user->user_email,
			'FNAME' 		=> $user->first_name,
			'MNAME' 		=> $user->middle_name,
			'LNAME' 		=> $user->last_name,
			'SEX'	 		=> ($user->gender == 1) ? 'Man' : 'Vrouw',
			'BIRTHDAY' 		=> $user->birthdate,
			'PREGNANT' 		=> $user->pregnancy_due_date,
			'GROUPINGS' 	=> array(
				array('name' => 'Doelgroep', 'groups' => implode(',', $source)),
				array('name' => 'Nieuwsbrieven', 'groups' => implode(',', $groups)),
			),
		);

		foreach ($user->get_children() as $key => $child)
		{
			$number = $key + 1;
			if ($number > 5)
			{
				break;
			}

			$mailchimp_user = array_merge($mailchimp_user, array(
				'NAMECHILD'.$number => $child->first_name,
				'SEXCHILD'.$number 	=> ($child->gender == 1) ? 'Man' : 'Vrouw',
				'DATECHILD'.$number => $child->birthdate,
			));
		}

		return $this->_mailchimp->listBatchSubscribe($this->_list_id, array($mailchimp_user), $double_opt, TRUE, TRUE);
	}
}