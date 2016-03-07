<?php

class Factory_Message {

	/**
	 * @param $type
	 * @return Message
	 * @throws Exception
	 */
	public static function build($type) {

		$message = "Message_" . $type;
		if (class_exists($message))
		{
			return new $message();
		}
		else
		{
			throw new Exception("Invalid message type given.");
		}
	}
}