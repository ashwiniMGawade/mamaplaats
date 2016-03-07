<?php

class Spam_CountryChecker {

	public function comment_is_possible_spam(Entity_Comment $comment, array $allowed_countries)
	{
		if (empty($comment->author_ip))
		{
			return FALSE;
		}

		// Get the ip information
		$ip_info = $this->_get_ip_info($comment->author_ip);

		// Return false if country code is empty
		if (empty($ip_info->geoplugin_countryCode) OR in_array($ip_info->geoplugin_countryCode, $allowed_countries))
		{
			return FALSE;
		}

		return TRUE;
	}

	private function _get_ip_info($ip)
	{
		try
		{
			$context = stream_context_create(array('http' => array('timeout' => 3)));
			$api_result = file_get_contents('http://www.geoplugin.net/json.gp?ip='.$ip, 0, $context);
			return json_decode($api_result);
		}
		catch (Exception $e)
		{
			return array();
		}
	}
}