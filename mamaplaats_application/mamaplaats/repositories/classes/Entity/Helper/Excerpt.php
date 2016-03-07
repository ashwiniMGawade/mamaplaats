<?php

trait Entity_Helper_Excerpt {

	public function get_excerpt($length = 140)
	{
		$excerpt = '';
		if ( ! empty($this->excerpt))
		{
			$excerpt = $this->excerpt;
		}

		if (empty($excerpt) AND ! empty($this->content))
		{
			$excerpt = trim(strip_tags($this->content));
		}

		return substr($excerpt, 0, $length);
	}
}