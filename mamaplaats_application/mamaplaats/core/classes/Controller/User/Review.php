<?php

class Controller_User_Review extends Controller_Browser {

	public function before()
	{
		parent::before();

		if (empty($this->auth_user))
		{
			$this->redirect(Route::url('user_login'));
		}
	}

	public function action_list()
	{
		$review_products = Factory_User::gets_review_list()->execute($this->auth_user);
		$view = new View_User_Review_List($review_products);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_subscribed_list()
	{
		$get_only_subscribed_list = true;
		$review_products = Factory_User::gets_review_list()->execute($this->auth_user, $get_only_subscribed_list);
		$view = new View_User_Review_List($review_products, $get_only_subscribed_list);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_apply()
	{
		$review_product_id = $this->request->param('review_product_id');
		$review_product = Factory_User::gets_review_application()->execute($review_product_id);

		$messages 	= array();
		$post 		= $this->request->post();
        $query 		= $this->request->query();
		if ( ! empty($post))
		{
			try
			{
				Factory_User::applies_for_review()->execute($this->auth_user, $review_product, $post);
				$messages = array('messages' => array(), 'type' => 'success');
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$view = new View_User_Review_Apply($review_product, $post, $messages, $query);

		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_write()
	{
		$review_id = $this->request->param('review_id');
		list($review, $media) = Factory_User::gets_review()->execute($this->auth_user, $review_id);

		$messages = array();
		$post = $this->request->post();
		if ( ! empty($post))
		{
			$review = ObjectMapper::factory()->map($post, $review, array(
				'title', 'information', 'sections', 'ratings', 'remarks', 'will_recommend',
			));

			try
			{
				Factory_User::updates_review()->execute($this->auth_user, $review, ( ! empty($post['finished'])));

				if ( ! empty($post['media']))
				{
					Factory_User::updates_review_media()->execute($this->auth_user, $review_id, $post['media']);
				}

				$messages = array('messages' => array('Je test resultaten zijn met success opgeslagen'), 'type' => 'success');
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}

			// Reload the objects
			list($review, $media) = Factory_User::gets_review()->execute($this->auth_user, $review_id);
		}

		$view = new View_User_Review_Write($this->auth_user, $review, $media, $messages);
		$this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
	}

	public function action_add_media()
	{
		$this->auto_render = FALSE;
		$review_id = $this->request->param('review_id');
		$review_section_id = $this->request->query('review_section_id');

		// Store the file
		$file_path = $this->_store_file($review_id, $_FILES['file'], $this->request->post());
		if ($file_path !== FALSE)
		{
			$file = File_Mapper_Factory::file_system()->map($file_path);

			// Store Video's in youtube
			if (strpos($file->mime_type, 'video') !== FALSE)
			{
				$youtube = File_Storage_Factory::youtube()->store('', $file, array(
					'title' 		=> 'poke',
					'description' 	=> 'poke',
					'tags' 			=> array(),
					'privacy' 		=> 'private',
				));

				$file->path = 'http://www.youtube.com/watch?v='.$youtube['id'];
			}

			$fields = array(
				'title' 		=> $file->name,
				'description' 	=> '',
				'path' 			=> $file->path,
				'type'			=> (strpos($file->mime_type, 'image') !== FALSE) ? 'image' : 'video',
			);

			$media = Factory_User::adds_media_to_review()->execute($this->auth_user, $review_id, $fields, array('review_section_id' => $review_section_id));
			$this->response->body(json_encode($media));
		}
	}

	public function action_remove_media()
	{
		$this->auto_render = FALSE;
		Factory_User::deletes_media_from_review()->execute($this->auth_user, $this->request->param('media_id'));

		$this->request->body(json_encode(array('result' => 'success')));
	}

	private function _store_file($review_id, $file, $post)
	{
		$path 			= 'uploads/review/'.$review_id.'/';
		$file_name 		= $post['resumableFilename'];
		$chunk_now 		= $post['resumableChunkNumber'];
		$chunk_total 	= $post['resumableTotalChunks'];

		// create the final destination file
		@mkdir($path, 0777, TRUE);
		file_put_contents(DOCROOT.$path.$file_name, file_get_contents($file['tmp_name']), FILE_APPEND | LOCK_EX);

		if ($chunk_now < $chunk_total)
		{
			return FALSE;
		}

		$file = File_Mapper_Factory::file_system()->map($path.$file_name);

		// Check if the file is allowed
		try
		{
			$validate = new File_Validate;
			$validate->validate($file, array('png', 'jpg', 'gif', 'avi', 'mkv', 'mov', 'mpeg4', 'wmv', 'mpegps', 'flv', '3gpp', 'webm'));
		}
		catch (Exception $e)
		{
			unlink($file->path);
			return FALSE;
		}

		return $file->path;
	}
}