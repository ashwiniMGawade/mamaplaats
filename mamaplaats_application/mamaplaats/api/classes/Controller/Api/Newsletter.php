<?php

class Controller_Api_Newsletter extends Controller_Base {

	public function action_subscribe()
	{
		$this->auto_render = FALSE;

		Factory_Guest::subscribes_for_newsletter()->execute($this->request->post());
		$this->response->body(json_encode(array('result' => 'success')));
	}
}