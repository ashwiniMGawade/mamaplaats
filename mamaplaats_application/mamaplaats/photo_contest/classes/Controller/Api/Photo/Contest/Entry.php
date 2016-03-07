<?php

class Controller_Api_Photo_Contest_Entry extends Controller_Api {

	public function action_request()
	{
		$response = '';
		$contest_id = $this->request->param('contest_id');
		$entry_id = $this->request->param('entry_id');

		if ($this->request->method() == 'GET' AND $entry_id !== NULL)
		{
			$response = $this->rest_single($entry_id);
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
			$response = $this->rest_update($entry_id);
		}
		else if ($this->request->method() == 'DELETE')
		{
			$response = $this->rest_delete($entry_id);
		}

		$this->response->headers('Content-Type', 'application/json');
		$this->response->body($response);
	}

	protected function rest_list($contest_id)
	{
		$entry = new Model_Photo_Contest_Entry;
		$entry->with('wp_user');
		$filter = DB::select()->where('photo_contest_id', '=', $contest_id);

		$entries = array();
		foreach ($entry->load($filter, NULL) AS $entry)
		{
			$entries[] = array_merge($entry->as_array(), array('wp_user' => $entry->wp_user->as_array()));
		}

		return json_encode($entries);
	}

	protected function rest_single($entry_id)
	{
		$entry = new Model_Photo_Contest_Entry($entry_id);
		$user = $entry->wp_user->as_array();

		return json_encode(array_merge($entry->as_array(), array('wp_user' => $user)));
	}

	protected function rest_create()
	{
		$entry = new Model_Photo_Contest_Entry;

		try
		{
			$entry->set_fields($this->request->post());
			$entry->save();

			$this->response->status(201);
			$this->response->headers('Location', '/api/entry/'.$entry->id);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_update($entry_id = NULL)
	{
		$entry = new Model_Photo_Contest_Entry($entry_id);

		try
		{
			parse_str($this->request->body(), $put_data);
			$entry->set_fields($put_data);
			$entry->save();

			$this->response->status(200);
		}
		catch (AutoModeler_Exception $e)
		{
			$this->response->status(400);
			return json_encode(array('errors' => $e->errors));
		}

		return NULL;
	}

	protected function rest_delete($entry_id)
	{
		$entry = new Model_Photo_Contest_Entry($entry_id);

		try
		{
			$entry->delete();
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