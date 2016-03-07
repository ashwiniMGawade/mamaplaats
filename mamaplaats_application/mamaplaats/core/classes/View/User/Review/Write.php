<?php

defined('SYSPATH') or die('No direct script access.');

class View_User_Review_Write {

	use View_Helper_Select, View_Helper_Message;

	public $title = 'Schrijf een review';

	private $_user;
	private $_review;
	private $_media;

	public function __construct($user, $review, $media, $messages)
	{
		$this->_user = $user;
		$this->_review = $review;
		$this->_media = $media;
		$this->messages = $messages;
	}

	public function review()
	{
		return $this->_review;
	}

	public function review_sections()
	{
		$media = $this->_media;

		$sections = array();
		foreach ($this->_review->sections as $section)
		{
			$section['media'] = $this->_get_media_for_review_section($media, $section['id']);
			$sections[] = $section;
		}

		return $sections;
	}

	public function review_ratings()
	{
		return $this->_review->ratings;
	}

	public function remarks()
	{
		return json_encode($this->_review->remarks);
	}

	private function _get_media_for_review_section($media_items, $review_section_id)
	{
		$formatted_media = array();
		foreach ($media_items as $media_item)
		{
			if ($media_item->review_section_id !== $review_section_id)
			{
				continue;
			}

			$media_item->thumbnail = '/'.$media_item->path;
			if (strpos($media_item->thumbnail, 'youtube.com') !== FALSE)
			{
				parse_str(parse_url($media_item->thumbnail, PHP_URL_QUERY), $query);
				$media_item->thumbnail = 'http://i1.ytimg.com/vi/'.$query['v'].'/mqdefault.jpg';
			}

			$formatted_media[] = $media_item;
		}

		return $formatted_media;
	}
}