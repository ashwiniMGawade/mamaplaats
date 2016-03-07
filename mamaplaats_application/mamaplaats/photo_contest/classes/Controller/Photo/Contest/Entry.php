<?php

class Controller_Photo_Contest_Entry extends Controller_WordPress {

	/**
	 * @var Model_Photo_Contest_Entry The entry object
	 */
	protected $_entry;

	/**
	 * @var Model_Photo_Contest The contest object
	 */
	protected $_contest;

	/**
	 * @var object The view
	 */
	protected $content;

	/**
	 * @var string The currently active menu item
	 */
	protected $_active_menu = NULL;

	/**
	 * Load the user, contest and entry
	 */
	public function before()
	{
		// Inialize the current user
		parent::before();

		$this->_entry 	= new Model_Photo_Contest_Entry($this->request->param('entry_id'));
		$this->_contest = new Model_Photo_Contest($this->_entry->photo_contest_id);
	}

	/**
	 * This is the entry index page. The person can view a single entry that
	 * was submitted for the contest
	 *
	 * @throws HTTP_Exception_404
	 */
	public function action_index()
	{
		// Activate the vote menu item
		$this->_active_menu = 'Stemmen';

		// Check if the contest is not started yet or the photo_is not accepted
		$limited_view = FALSE;
		if (($this->_contest->active === 0 OR $this->_entry->status != 'accepted'))
		{
			// And the user is not the owner of the photo then throw a 404
			if ($this->_entry->wp_user_id !== $this->auth->ID)
			{
				throw new HTTP_Exception_404('Deze pagina bestaat niet');
			}

			// If we got here it means the owner so limit it
			$limited_view = TRUE;
		}

		// Load the parent photo contest
		$this->content = new View_Photo_Contest_Entry_Index($this->_contest, $this->_entry, $this->auth, $limited_view);
	}

	/**
	 * This is the entry share page. You can share the entry by email here
	 *
	 * @throws HTTP_Exception_404
	 */
	public function action_share()
	{
		// You cannot share a non-active contest or not accepted entry
		if (($this->_contest->active === 0 OR $this->_entry->status != 'accepted'))
		{
			throw new HTTP_Exception_404('Deze pagina bestaat niet');
		}

		if ($post_data = $this->request->post())
		{
			// Start validation
			$post = Validation::factory($post_data);
			$post->rule('name_sender', 'not_empty');
			$post->rule('name_friend', 'not_empty');
			$post->rule('email_friend', 'not_empty');
			$post->rule('email_friend', 'email');
			$post->rule('description', 'not_empty');

			// If the post checks out
			if($post->check())
			{
				// Get the posted variables
				$name_sender 	= Arr::get($post->data(), 'name_sender');
				$email_friend 	= Arr::get($post->data(), 'email_friend');

				$message = array(
					'subject' 			=> $this->_entry->title.' | '.$name_sender.' wilt deze foto met je delen | Mamaplaats',
					'receiver_name' 	=> Arr::get($post->data(), 'name_friend'),
					'sender_name' 		=> $name_sender,
					'message' 			=> Arr::get($post->data(), 'description'),
				);

				$description = new View_Photo_Contest_Email_Share($this->_entry, $message);

				// Send the email to the friend
				Email::factory($message['subject'], $description->render(), 'text/html')
					->to($email_friend)
					->from('no-reply@mamaplaats.nl', $message['sender_name'])
					->send();

				$success = TRUE;
			}
			else
			{
				$errors = $post->errors('validation');
			}
		}

		$this->content 			= new View_Photo_Contest_Entry_Share($this->_entry);
		$this->content->errors 	= (isset($errors)) ? $errors : array();
		$this->content->success = (isset($success)) ? $success : FALSE;
		$this->content->form	= $post_data;
	}

	/**
	 * This is the entry vote page. You can vote on a entry here
	 *
	 * @throws HTTP_Exception_404
	 */
	public function action_vote()
	{
		$current_date = date('Y-m-d');

		// You cannot vote on a non-active contest or not accepted entry
		if ($this->_contest->start_date > $current_date
			OR $this->_contest->end_date < $current_date
			OR $this->_entry->status != 'accepted')
		{
			throw new HTTP_Exception_404('Deze pagina bestaat niet');
		}

		// You can only vote once every contest so check this
		$has_voted = FALSE;
		if ($post = $this->request->post())
		{
			$vote_ip = $this->_contest->duplicate_vote_check($_SERVER['REMOTE_ADDR'], Arr::get($post, 'email'));
			if (count($vote_ip) > 0)
			{
				// The user has voted
				$has_voted = TRUE;
				$success = Kohana::message('photocontest', 'duplicate_vote');
			}
		}

		if ($post = $this->request->post() AND $has_voted === FALSE)
		{
			// Check the captcha
			$validation = new Validation($post);
			$validation->rule('captcha','not_empty');
			$validation->rule('captcha','Captcha::valid');

			// Build the post data
			$post_data = array(
				'firstname' 	=> Arr::get($post, 'firstname'),
				'lastname' 		=> Arr::get($post, 'lastname'),
				'email' 		=> Arr::get($post, 'email'),
				'ip_address' 	=> $_SERVER['REMOTE_ADDR'],
				'browser' 		=> $_SERVER['HTTP_USER_AGENT'],
				'newsletter' 	=> Arr::get($post, 'newsletter', 0),
			);

			try
			{
				// Add the vote and set the cookie for sharing
				$vote = $this->_entry->add_vote($post_data, $validation);

				// Send the email with the confirmation link
				$this->_send_confirm_email($vote, $this->_contest);

				$success = Kohana::message('photocontest', 'vote_saved');
			}
			catch (AutoModeler_Exception $e)
			{
				$errors = $e->errors;
			}
		}

		$this->content 			= new View_Photo_Contest_Entry_Vote($this->_entry);
		$this->content->errors 	= (isset($errors)) ? $errors : array();
		$this->content->success = (isset($success)) ? $success : FALSE;
		$this->content->form 	= (isset($post_data)) ? $post_data : array('newsletter' => 1);
	}

	/**
	 * This is the entry vote confirm page. You can confirm your vote here
	 *
	 * @throws HTTP_Exception_404
	 */
	public function action_confirm()
	{
		$get 	= $this->request->query();
		$email 	=  Arr::get($get, 'email');
		$hash 	= Arr::get($get, 'hash');

		if ($email !== NULL AND $hash !== NULL)
		{
			try
			{
				// Add the vote and set the cookie for sharing
				$this->_entry->confirm_vote($email, $hash);
				Cookie::set('contest_vote_'.$this->_entry->id, 1);

				$success = Kohana::message('photocontest', 'vote_confirmed');
			}
			catch (AutoModeler_Exception $e)
			{
				$errors = array('error' => $e->getMessage());
			}
		}

		$this->content 			= new View_Photo_Contest_Entry_Confirm($this->_entry);
		$this->content->errors 	= (isset($errors)) ? $errors : array();
		$this->content->success = (isset($success)) ? $success : FALSE;
		$this->content->form 	= (isset($post_data)) ? $post_data : array('newsletter' => 1);
	}

	/**
	 * Add the widget and build the content
	 */
	public function after()
	{
		// Load the main view
		$this->view = new View_Photo_Contest_Layout($this->content, $this->_contest);

		// Add a widget when the photo contest started
		if ($this->_contest->active == 1)
		{
			$top_widget	= new View_Photo_Contest_Widget_Top($this->_contest);
			$this->view->add_widget($top_widget);
		}

		if ($this->_active_menu !== NULL)
		{
			$this->view->activate_menu_item($this->_active_menu);
		}

		parent::after();
	}

	private function _send_confirm_email(Model_Photo_Contest_Vote $vote, Model_Photo_Contest $contest)
	{
		$message = array(
			'subject' => 'Bevestig je stem op de foto | Mamaplaats',
		);
		
		$view = new View_Photo_Contest_Email_Confirm($vote, $contest);
		$view->subject = $message['subject'];
		
		Email::factory($message['subject'], $view->render(), 'text/html')
			->to($vote->email)
			->from('no-reply@mamaplaats.nl', 'Mamaplaats')
			->send();
	}
}