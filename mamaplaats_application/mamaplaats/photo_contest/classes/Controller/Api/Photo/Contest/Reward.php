<?php

class Controller_Api_Photo_Contest_Reward extends Controller_Api {

	public function action_request()
	{
		$response = '';
		$contest_id = $this->request->param('contest_id');
		$reward_id = $this->request->param('reward_id');

		if ($this->request->method() == 'GET' AND $reward_id !== NULL)
		{
			$response = $this->rest_single($reward_id);
		}
		else if ($this->request->method() == 'GET')
		{
			$response = $this->rest_list($contest_id);
		}
		else if ($this->request->method() == 'POST')
		{
			$response = $this->rest_create();
		}
		else if ($this->request->method() == 'PUT')
		{
			$response = $this->rest_update($reward_id);
		}
		else if ($this->request->method() == 'DELETE')
		{
			$response = $this->rest_delete($reward_id);
		}

		$this->response->headers('Content-Type', 'application/json');
		$this->response->body($response);
	}

	public function action_reward_file()
	{
		$response = '';
		$reward_id = $this->request->param('reward_id');
		$reward = new Model_Photo_Contest_Reward($reward_id);

		try
		{
			// Save the photo
			$file_name = $this->_save_reward_photo($this->request->body());
			$reward->photo_url = $file_name;
			$reward->save();

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

	protected function rest_list($contest_id)
	{
		$reward = new Model_Photo_Contest_Reward;
		$filter = DB::select()->where('photo_contest_id', '=', $contest_id);

		$rewards = array();
		foreach ($reward->load($filter, NULL) AS $reward)
		{
			$rewards[] = $reward->as_array();
		}

		return json_encode($rewards);
	}

	protected function rest_single($reward_id)
	{
		$reward = new Model_Photo_Contest_Reward($reward_id);
		return json_encode($reward->as_array());
	}

	protected function rest_create()
	{
		$reward = new Model_Photo_Contest_Reward;

		try
		{
			$reward->set_fields($this->request->post());
			$reward->save();

			$this->response->status(201);
			$this->response->headers('Location', '/api/reward/'.$reward->id);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_update($reward_id)
	{
		$reward = new Model_Photo_Contest_Reward($reward_id);

		try
		{
			parse_str($this->request->body(), $put_data);
			$reward->set_fields($put_data);
			$reward->save();

			$this->response->status(200);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_delete($reward_id)
	{
		$reward = new Model_Photo_Contest_Reward($reward_id);

		try
		{
			$reward->delete();
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

	protected function _save_reward_photo($file_data)
	{
		$directory = DOCROOT.'uploads/reward/';
		$filename = strtolower(Text::random('alnum', 20));

		// Create a temporary file
		file_put_contents($directory.$filename, $file_data);

		$image = Image::factory($directory.$filename);
		$image->save($directory.$filename.'.jpg');

		unlink($directory.$filename);

		return $filename;
	}
}