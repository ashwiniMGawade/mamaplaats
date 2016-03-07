<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The Photo Contest Vote Model that contact the database
 *
 * @property $id
 * @property $photo_contest_entry_id
 * @property $firstname
 * @property $lastname
 * @property $email
 * @property $newsletter
 * @property $ip_address
 * @property $browser
 * @property $status
 * @property $confirmation_hash
 */
class Model_Photo_Contest_Vote extends AutoModeler_ORM
{
	protected $_table_name  = 'photo_contest_votes';

	protected $_belongs_to = array('photo_contest_entry');

	protected $_data = array(
		'id' 						=> NULL,
		'photo_contest_entry_id' 	=> NULL,
		'firstname' 				=> '',
		'lastname' 					=> '',
		'email' 					=> '',
		'newsletter' 				=> 1,
		'ip_address' 				=> '',
		'browser' 					=> '',
		'status' 					=> 'unconfirmed',
		'confirmation_hash' 		=> '',
	);

	protected $_rules = array(
		'id'						=> array(array('digit')),
		'photo_contest_entry_id'	=> array(array('digit')),
		'firstname'					=> array(array('not_empty')),
		'lastname'					=> array(array('not_empty')),
		'email'						=> array(array('not_empty'), array('email')),
		'ip_address'				=> array(array('not_empty')),
		'browser'					=> array(array('not_empty')),
	);

	public function subscribe()
	{
			$batch[] = array(
				'EMAIL' 		=> $this->email,
				'FNAME' 		=> $this->firstname,
				'LNAME' 		=> $this->lastname,
				'OPTIN_IP' 		=> $this->ip_address,
				'OPTIN_TIME' 	=> date('Y-m-d H:i:s'),
				'GROUPINGS' 	=> array(
					array('name' => 'Doelgroep', 'groups' => 'Fotowedstrijd'),
				),
			);

			$mailchimp = new Mailchimp('62713f03cb618051b0c8273053fef6f0-us2');
			$mailchimp->listBatchSubscribe('0504cfcc5e', $batch, false, false, false);
	}
}
