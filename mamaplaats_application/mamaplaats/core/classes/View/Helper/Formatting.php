<?php

trait View_Helper_Formatting {

	protected function format_youtube_as_embed($url)
	{
		if (strpos($url, '/embed/') !== FALSE)
		{
			return $url;
		}

		return '//www.youtube.com/embed/'.$this->_get_youtube_id($url);
	}

	protected function format_youtube_as_thumb($url)
	{
		return '//i1.ytimg.com/vi/'.$this->_get_youtube_id($url).'/mqdefault.jpg';
	}

	private function _get_youtube_id($url)
	{
		if (preg_match('/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/', $url, $matches))
		{
			return ( ! empty($matches[2])) ? $matches[2] : FALSE;
		}

		return FALSE;
	}
}
