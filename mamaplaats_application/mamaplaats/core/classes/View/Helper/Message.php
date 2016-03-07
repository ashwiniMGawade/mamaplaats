<?php

trait View_Helper_Message {

	protected $messages;

	public function has_messages()
	{
		return $this->get_messages();
	}

	public function get_messages()
	{
		return $this->format_messages($this->messages);
	}

	protected function format_messages($messages)
	{
		if (empty($messages['messages']))
		{
			return array();
		}

		$messages['type'] = $this->_translate_type($messages['type']);
		$new_messages = array('messages' => array());
		foreach ($messages['messages'] as $message)
		{
			$new_messages['messages'][]['message'] = $message;
		}

		return array_merge($messages, $new_messages);
	}

	private function _translate_type($type)
	{
		if ($type == 'error')
		{
			return 'danger';
		}

		return $type;
	}
}
