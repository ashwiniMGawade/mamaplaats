<?php

class Controller_Api_Photo_Contest extends Controller_Api {

	public function action_request()
	{
		$response = '';
		$contest_id = $this->request->param('contest_id');


		if ($this->request->method() == 'GET' AND $contest_id !== NULL)
		{
			$response = $this->rest_single($contest_id);
		}
		else if ($this->request->method() == 'GET')
		{
			$response = $this->rest_list();
		}
		else if ($this->request->method() == 'POST')
		{
			$response = $this->rest_create();
		}
		else if ($this->request->method() == 'PUT')
		{
			$response = $this->rest_update($contest_id);
		}
		else if ($this->request->method() == 'DELETE')
		{
			$response = $this->rest_delete($contest_id);
		}

		$this->response->headers('Content-Type', 'application/json');
		$this->response->body($response);
	}

	public function action_file()
	{
		$response = '';
		$contest_id = $this->request->param('contest_id');
		$type = $this->request->param('type');
		$contest = new Model_Photo_Contest($contest_id);

		try
		{
			// Save the photo
			$file_name = $this->_save_photo($this->request->body(), $type);

			if ($type == 'contest')
			{
				$contest->example_photo = $file_name;
			}
			else
			{
				$contest->sponsor_photo = $file_name;
			}

			$contest->save();

			$this->response->status(200);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			$response = json_encode(array('errors' => $e->errors));
		}

		$this->response->headers('Content-Type', 'application/json');
		$this->response->body($response);

		return NULL;
	}

	protected function rest_list()
	{
		$contest = new Model_Photo_Contest;

		$contests = array();
		foreach ($contest->load(NULL, NULL) AS $contest)
		{
			$contests[] = $contest->as_array();
		}

		return json_encode($contests);
	}

	protected function rest_single($contest_id)
	{
		// Load the contest
		$contest = new Model_Photo_Contest($contest_id);
		return json_encode($contest->as_array());
	}

	protected function rest_create()
	{
		$contest = new Model_Photo_Contest;

		try
		{
			$contest->set_fields($this->request->post());
			$contest->save();

			$this->response->status(201);
			$this->response->headers('Location', '/api/photo_contest/'.$contest->id);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_update($contest_id = NULL)
	{
		$contest = new Model_Photo_Contest($contest_id);

		try
		{
			parse_str($this->request->body(), $put_data);
			
			if ($this->request->body() && empty($put_data)) 
			{
				$this->response->status(400);
				return json_encode(array('errors' => 'Body was empty?'));
			} 
			else
			{
				$contest->set_fields($put_data);
				$contest->save();
				$this->response->status(200);
			}
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_delete($contest_id)
	{
		$contest = new Model_Photo_Contest($contest_id);

		try
		{
			$contest->delete();
			$this->response->status(202);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => array(
				'You can\'t delete a non existing photo contest'
			)));
		}

		return NULL;
	}

	protected function _save_photo($file_data, $type = 'contest')
	{
		$directory = DOCROOT.'uploads/'.$type.'/';
		$filename = strtolower(Text::random('alnum', 20));

		// Create a temporary file
		file_put_contents($directory.$filename, $file_data);

		$image = Image::factory($directory.$filename);
		$image->save($directory.$filename.'.jpg');

		unlink($directory.$filename);

		return $filename;
	}
}