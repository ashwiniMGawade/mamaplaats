<?php

class Controller_Api_Photo_Contest_Vote extends Controller_Api {

	public function action_request()
	{
		$response = '';
		$contest_id = $this->request->param('contest_id');
		$vote_id = $this->request->param('vote_id');

		if ($this->request->method() == 'GET' AND $vote_id !== NULL)
		{
			$response = $this->rest_single($vote_id);
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
			$response = $this->rest_update($vote_id);
		}
		else if ($this->request->method() == 'DELETE')
		{
			$response = $this->rest_delete($vote_id);
		}

		$this->response->headers('Content-Type', 'application/json');
		$this->response->body($response);
	}

	protected function rest_list($contest_id)
	{
		$contest = new Model_Photo_Contest($contest_id);

		$votes = array();
		foreach ($contest->get_votes() AS $vote)
		{
			$votes[] = $vote->as_array();
		}

		return json_encode($votes);
	}

	protected function rest_single($vote_id)
	{
		$vote = new Model_Photo_Contest_Vote($vote_id);
		return json_encode($vote->as_array());
	}

	protected function rest_create()
	{
		$vote = new Model_Photo_Contest_Vote;

		try
		{
			$vote->set_fields($this->request->post());
			$vote->save();

			$this->response->status(201);
			$this->response->headers('Location', '/api/vote/'.$vote->id);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_update($vote_id = NULL)
	{
		$vote = new Model_Photo_Contest_Vote($vote_id);

		try
		{
			parse_str($this->request->body(), $put_data);
			$vote->set_fields($put_data);
			$vote->save();

			$this->response->status(200);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_delete($vote_id)
	{
		$vote = new Model_Photo_Contest_Vote($vote_id);

		try
		{
			$vote->delete();
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
}