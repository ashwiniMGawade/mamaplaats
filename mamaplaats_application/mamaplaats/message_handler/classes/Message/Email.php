<?php

class Message_Email implements Message {

	public function send($name, array $parameters = array())
	{
		$message = $this->_render_message($name, $parameters);

		Email::factory($parameters['subject'], $message, 'text/html')
			->to($parameters['receiver'])
			->from($parameters['sender'])
			->send();
	}

	public function dry_run($name, array $parameters = array())
	{
		$message = $this->_render_message($name, $parameters);

		return array(
			'subject' 	=> $parameters['subject'],
			'sender' 	=> $parameters['sender'],
			'receiver' 	=> $parameters['receiver'],
			'message' 	=> $message,
		);
	}

	private function _render_message($name, array $parameters)
	{
		$view = "View_Email_".$name;
		if (class_exists($view))
		{
			$mustache = Kostache::factory();
			return $mustache->render(new $view($parameters));
		}
		else
		{
			throw new Exception("Invalid email name given.");
		}
	}
}