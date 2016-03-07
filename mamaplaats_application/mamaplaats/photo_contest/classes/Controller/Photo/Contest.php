<?php

class Controller_Photo_Contest extends Controller_WordPress {

	/**
	 * This is the home page that lists the currently active contest
	 * but also the comming contest so users can submit their entries
	 */
	public function action_home()
	{
		// Load the clean models
		$active_contest = new Model_Photo_Contest;
		$next_contest = new Model_Photo_Contest;

		$this->view = new View_Photo_Contest_Home($active_contest->get_active(), $next_contest->get_next());
	}

	/**
	 * This is the entry list page for you currently active photo contest
	 */
	public function action_list()
	{
		// Load the contest id
		$contest_id = $this->request->param('contest_id');

		// Load the contest model
		$contest = new Model_Photo_Contest($contest_id);

		// Load the active contest if the ID is not set
		if ($contest_id === NULL)
		{
			$contest->get_active();
		}

		// You can only see the list if the contest has started
		if ($contest->id === NULL)
		{
			die('Sorry you can\'t view this listing yet');
		}

		// Lets build the filters
		$query = $this->request->query();
		$filters = array(
			'amount' 	=> Arr::get($query, 'amount', 9),
			'order_by' 	=> Arr::get($query, 'order_by', 'last_vote'),
			'page' 		=> Arr::get($query, 'page', 1),
		);

		// Let the view build the list
		$content = new View_Photo_Contest_List($contest, $this->auth, $filters);
		$this->_build_layout($content, $contest, array('top'));
	}

	/**
	 * This is the term listing page you can view the test for every
	 * photo contest
	 */
	public function action_terms()
	{
		// Get the contest id
		$contest_id = $this->request->param('contest_id');

		// Load the next contest
		$contest = new Model_Photo_Contest($contest_id);

		// Build the view
		$content = new View_Photo_Contest_Terms($contest);
		$this->_build_layout($content, $contest);
	}

	/**
	 * This is the entry upload page. You can submit your entry here
	 */
	public function action_upload()
	{
		// Load the next contest
		$contest = new Model_Photo_Contest;
		$contest->get_next();

		// Replace the original widgets
		$this->_widgets = array('reward');

		if($post = $this->request->post())
		{
			$filename = FALSE;

			if (isset($_FILES['image']))
			{
				$filename = $this->_save_image($_FILES['image']);
			}

			if ($filename !== FALSE)
			{
				try
				{
					$entry_fields = array(
						'wp_user_id' => $this->auth->ID,
						'title' => Arr::get($post, 'title'),
						'description' => Arr::get($post, 'description'),
						'photo_url' => $filename,
					);

					$entry = $contest->add_entry($entry_fields);

					$success = Kohana::message('photocontest', 'upload_complete');
					$success = strtr($success, array(
						':entry_id' => $entry->id,
						':start_date' => strftime('%A, %e %B', strtotime($contest->start_date)),
					));
					
					$this->_send_confirm_email($entry, $contest);
					
				}
				catch(AutoModeler_Exception $e)
				{
					$errors = $e->errors;
				}
			}
			else
			{
				$errors = array('upload_error' => Kohana::message('photocontest', 'upload_error'));
			}
		}


		$content = new View_Photo_Contest_Upload($contest, $this->auth);
		$content->errors = isset($errors) ? $errors  : array();
		$content->success = (isset($success)) ? $success : FALSE;
		$content->form 	= (isset($entry_fields)) ? $entry_fields : array();
		$this->_build_layout($content, $contest, array('reward'));
	}
	
	/**
	 * Send the entry confirmation email
	 *
	 * @param bool|Model_Photo_Contest_Entry $entry The entry object
	 * @param bool|Model_Photo_Contest_Entry $entry The contest object
	 */
	private function _send_confirm_email(Model_Photo_Contest_Entry $entry, Model_Photo_Contest $contest)
	{
		if ($entry->wp_user_id !== $this->auth->ID)
		{
			throw new HTTP_Exception_404('Deze pagina bestaat niet');
		}
		
		$message = array(
				'subject' 			=> 'Bevestiging plaatsing foto | Mamaplaats',
				'receiver_name' 	=> $this->auth->display_name,
				'receiver_email'	=> $this->auth->user_email
		);
		
		
		$view = new View_Photo_Contest_Email_Upload_Confirm($entry, $contest, $message);
		$view->subject = $message['subject'];
		
		Email::factory($message['subject'], $view->render(), 'text/html')
		->to($message['receiver_email'])
		->from('no-reply@mamaplaats.nl', 'Mamaplaats')
		->send();
	}
	
	/**
	 * Build the contest layout
	 *
	 * @param string $content The content
	 * @param bool|Model_Photo_Contest $contest The contest object
	 * @param array $widgets The widgets to show
	 */
	protected function _build_layout($content, $contest = FALSE, $widgets = array())
	{
		$renderer = Kostache_Layout::factory();

		$this->view = new View_Photo_Contest_Layout($renderer->render($content), $contest);
		$this->view->title = $content->title;

		// Load the widgets
		foreach ($widgets as $widget)
		{
			// Add the ranking widget
			$class_name = 'View_Photo_Contest_Widget_'.ucfirst($widget);
			$_widget = $renderer->render(new $class_name($contest));
			$this->view->add_widget($_widget);
		}
	}

	/**
	 * Save the entry images
	 *
	 * @param $image
	 * @return bool|string
	 */
	protected function _save_image($image)
	{
		if (
			! Upload::valid($image) OR
			! Upload::not_empty($image) OR
			! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
		{
			return FALSE;
		}

		$directory = DOCROOT.'uploads/contest/';
		
		if ($file = Upload::save($image, NULL, $directory))
		{
			$filename = strtolower(Text::random('alnum', 20));

			$image = Image::factory($file);
			$image->resize(656, NULL)
				->save($directory.$filename.'.jpg');

			// Delete the temporary file
			unlink($file);

			return $filename;
		}

		return FALSE;
	}
}