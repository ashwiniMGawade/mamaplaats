<?php

class Controller_User_Profile extends Controller_Base {

	public function before()
	{
		parent::before();

		if (empty($this->auth_user))
		{
			$this->redirect(Route::url('user_login'));
		}
	}

	public function action_dashboard()
	{
		$profile 	= Factory_User::gets_profile_dashboard()->execute($this->auth_user, 10);
		$view 		= new View_User_Profile_Index($profile, $this->request);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_update()
	{
		$page = $this->request->param('slug');

		$messages = array();
		if ($post = $this->request->post())
		{
			try
			{
				$user = Factory_Repository::user()->load_object(array(array('id', '=', $this->auth_user->id)));

				if ( ! empty($_FILES['avatar']))
				{
					$file = $this->_upload_avatar($this->auth_user, $_FILES['avatar']);

					if ($file  === FALSE)
					{
						throw new Validate_Exception('Image upload failed', array('Je foto is niet geupload. De maximale grootte is 5MB en alleen png, jpg en gif foto\'s zijn toegestaan'));
					}
				}

				$post = $this->_prepare_fields($post);
				$user = ObjectMapper::factory()->map($post, $user, array());

				if ( ! empty($fields['profile_image_ext']))
				{
					$user->profile_image_ext = Arr::get($fields, 'profile_image_ext');
				}

				if ( ! empty($fields['children']))
				{
					$user->children = Arr::get($post, 'children', array());
				}

				if ($page == 'newsletter_settings')
				{
					$subscription = Arr::get($post, 'newsletter_subscription');
					$subscription = (empty($subscription)) ? 0 : 1;
					$user->newsletter = $subscription;
					$user->newsletter_subscription = $subscription;
				}

				Factory_User::updates_profile()->execute($user, $post);

				if($page == 'interest')
				{
					Factory_User::updates_interests()->execute($this->auth_user, Arr::get($post, 'interests', array()));
				}

				$messages = array('messages' => array('Bedankt, het is gelukt (let op: het kan even duren voordat je wijzigingen zichtbaar zijn).'), 'type' => 'success');

				Auth::instance()->reload_session();
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$profile = Factory_User::gets_profile()->execute($this->auth_user);
		$interests = Factory_User::gets_interests()->execute($this->auth_user);
		$select_info = Kohana::$config->load('info_arrays');

		$view = new View_User_Profile_Update($profile, $interests, $select_info, $messages, $page);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function _upload_avatar($user, $file)
	{
		if (empty($file['tmp_name']))
		{
			return TRUE;
		}

		$file_validate = new File_Validate;
		$image_convert = new Image_Convert;

		$file = File_Mapper_Factory::post()->map($file);

		try
		{
			$file_validate->validate($file, array('png', 'jpg', 'gif'));
			$file_validate->size_not_more_than($file, 5);

			// $file->path = $image_convert->convert($file, 'png');
			$file->name = $user->id.'.'.strtolower(pathinfo($file->name, PATHINFO_EXTENSION));

			File_Storage_Factory::file_system()->store('avatar', $file);

			return TRUE;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}

	private function _prepare_fields($fields)
	{
		if ( ! empty($fields['birthdate']))
		{
			$fields['birthdate'] = Transform::combine_date_fields($fields['birthdate']);
		}

		if ( ! empty($fields['is_pregnant']))
		{
			$fields['pregnancy_due_date'] = Transform::combine_date_fields($fields['pregnancy_due_date']);
		}
		else
		{
			unset($fields['pregnancy_due_date']);
		}

		if ( ! empty($fields['has_children']) AND ! empty($fields['children']))
		{
			$children = array();
			foreach ($fields['children'] as $child)
			{
				$child['birthdate'] = Transform::combine_date_fields($child['birthdate']);
				$children[] = $child;
			}

			$fields['children'] = $children;
		}
		else
		{
			unset($fields['children']);
		}

		if ( isset($_FILES['avatar']['name']))
		{
			$arrImg = explode(".", $_FILES['avatar']['name']);
			$ext    = end($arrImg);
			$fields['profile_image_ext'] = $ext;
		}

		return $fields;
	}
}