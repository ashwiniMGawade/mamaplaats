<?php

trait Entity_Helper_Seo {

	public function get_meta_title()
	{
		$meta_title = '';
		if ( ! empty($this->meta_title))
		{
			$meta_title = $this->meta_title;
		}

		if (empty($meta_title) AND ! empty($this->title))
		{
			$meta_title = $this->title;
		}

		return $meta_title;
	}

	public function get_meta_description($length = 160)
	{
		$meta_description = '';
		if ( ! empty($this->meta_description))
		{
			$meta_description = $this->meta_description;
		}

		if (empty($meta_description) AND ! empty($this->excerpt))
		{
			$meta_description = $this->excerpt;
		}

		if (empty($meta_description) AND ! empty($this->content))
		{
			$meta_description = trim(strip_tags($this->content));
		}

		return substr($meta_description, 0, $length);
	}
}