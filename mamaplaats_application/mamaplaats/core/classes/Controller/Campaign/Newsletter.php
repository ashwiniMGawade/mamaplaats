<?php

class Controller_Campaign_Newsletter extends Controller_Website {

	public function action_register()
	{
		$mailchimp = new Mailchimp_Api;

		// Check if the subscriber exists in the database and validate this check id
		$user_id = $this->request->query('uid');
		$subscriber = $mailchimp->get_single_subscription($user_id);
		if ($subscriber === FALSE OR strpos($user_id, '@'))
		{
			die();
		}

		// Set default data
		$post = $this->_format_subscribe_info($subscriber['merges']);

		if ($this->request->post())
		{
			$post = $this->request->post();

			// Update the user
			$user = new Model_WP_User($post['user_email']);

			try
			{
				// Validate the user
				$this->_validate_user_array($post);

				// Fill the user fields so we can send it to mailchimp
				$user->set_fields($post);
				if ( ! empty($post['children']))
				{
					$matched_children = $this->_match_with_existing_children($user, $post['children']);
					$user->set_children($matched_children);
				}

				// Only update existing users. Don't make new ones
				if ($user->ID !== NULL)
				{
					// Merge in some more info
					$post = array_merge($post, array(
						'registration_ip' => $_SERVER['REMOTE_ADDR'],
					));

					$user->save();
				}

				// Update mailchimp
				$mailchimp->subscribe_or_update($user, 'all', FALSE, array('Mamaplaats'));
				$success = TRUE;
			}
			catch (AutoModeler_Exception $e)
			{
				$errors = array_merge(array($e->getMessage()), $e->errors);
			}
		}

		$this->view = new View_Campaign_Newsletter_Register($post);
		$this->view->errors = ( ! empty($errors)) ? $errors : array();
		$this->view->success = ( ! empty($success)) ? $success : FALSE;
	}

	private function _format_subscribe_info($subscriber)
	{
		$formatted_subscriber = array (
			'first_name' 	=> $subscriber['FNAME'],
			'middle_name' 	=> $subscriber['MNAME'],
			'last_name' 	=> $subscriber['LNAME'],
			'user_email' 	=> $subscriber['EMAIL'],
			'birthdate' 	=> $subscriber['BIRTHDAY'],
			'gender' 		=> $this->_convert_gender($subscriber['SEX']),
			'pregnancy_due_date' => $subscriber['PREGNANT'],
			'children' 		=> array(),
		);

		for ($i = 1; $i <= 5; $i++)
		{
			$name = $subscriber['NAMECHILD'.$i];
			$date = $subscriber['DATECHILD'.$i];
			$gender = $this->_convert_gender($subscriber['SEXCHILD'.$i]);

			if ( ! empty($name) OR ! empty($date))
			{
				$formatted_subscriber['children'][] = array('id' => '', 'first_name' => $name, 'birthdate' => $date, 'gender' => $gender);
			}
		}

		return $formatted_subscriber;
	}

	private function _convert_gender($gender)
	{
		if ($gender == 'Man')
		{
			return 1;
		}
		elseif ($gender == 'Vrouw')
		{
			return 2;
		}

		return '';
	}

	private function _validate_user_array($user_array)
	{
		// Validate the user
		$validate_user = Validation::factory($user_array);
		$validate_user->rules('user_email', array(array('not_empty'), array('email')));
		$validate_user->rules('first_name', array(array('not_empty')));
		$validate_user->rules('last_name', array(array('not_empty')));
		$validate_user->rules('birthdate', array(array('not_empty'), array('date')));
		$validate_user->rules('gender', array(array('not_empty'), array('digit')));
		$validate_user->rules('pregnancy_due_date', array(array('date')));

		if ($validate_user->check() === FALSE)
		{
			throw new AutoModeler_Exception('Een of meer van je velden zijn niet volledig ingevuld:', array(), $validate_user->errors('validation'));
		}

		// Validate the children
		if ( ! empty($user_array['children']))
		{
			foreach ($user_array['children'] as $child)
			{
				$validate_child = Validation::factory($child);
				$validate_child->rules('first_name', array(array('not_empty')));
				$validate_child->rules('birthdate', array(array('not_empty'), array('date')));
				$validate_child->rules('gender', array(array('not_empty'), array('digit')));

				if ($validate_child->check() === FALSE)
				{
					throw new AutoModeler_Exception('Een of meer van je Kinderen zijn niet volledig ingevuld:', array(), $validate_child->errors('validation'));
				}
			}
		}
	}

	private function _match_with_existing_children(Model_WP_User $user, $new_children)
	{
		// Build match array
		$existing_children = array();
		foreach ($user->get_children() as $existing_child)
		{
			$first_name = strtolower($existing_child->first_name);
			$existing_children[$first_name] = $existing_child->id;
		}

		// Look for existing children and else add ID if found
		foreach ($new_children as $new_child_id => $new_child)
		{
			$new_first_name = $new_child['first_name'];
			if (array_key_exists($new_first_name, $existing_children))
			{
				$new_children[$new_child_id]['id'] = $existing_children[$new_first_name];
			}
		}

		return $new_children;
	}
}