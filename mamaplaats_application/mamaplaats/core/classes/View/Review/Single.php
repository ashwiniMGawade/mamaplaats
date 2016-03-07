<?php defined('SYSPATH') or die('No direct script access.');

class View_Review_Single {

	use View_Helper_Review, View_Helper_Formatting, View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

	private $_review;
	public $widgets;

	public function __construct($review, $widgets)
	{
		$this->title = ( ! empty($review['review']->meta_title))
			? $review['review']->meta_title
			: $review['review']->title;

		$this->description = ( ! empty($review['review']->meta_description))
			? $review['review']->meta_description
			: substr(strip_tags($review['review']->review), 0, 170);

		$this->image = URL::site($this->get_image_path('avatar', $review['user']->id, 280, 250, $review['user']->profile_image_ext), TRUE);

		$this->_review = $review;
		$this->widgets = $widgets;
	}

	public function user()
	{
		$user = $this->_review['user'];
		$user->avatar = $this->get_image_path('avatar', $this->_review['user']->id, 280, 250, $this->_review['user']->profile_image_ext);

		return $user;
	}

	public function review()
	{
		$review = $this->_review['review'];
		if ($review->status  ==  "published")
		{
			$review->published_formatted = strftime('%A %e %B %Y', strtotime($review->published));
		}

		return $review;
	}

	public function sections()
	{
		$review = $this->_review['review'];
		$media_items = $this->_review['media'];

		$sections = array();
		foreach ($review->sections as $section)
		{
			$videos = $this->_get_section_videos($media_items, $section['id']);
			$images = $this->_get_section_images($media_items, $section['id']);

			$section['display_videos'] = count($videos);
			$section['first_video'] = reset($videos);
			$section['videos'] = $videos;

			$section['display_images'] = count($images);
			$section['images'] = $images;

			$sections[] = $section;
		}

		return $sections;
	}

	public function ratings()
	{
		$review = $this->_review['review'];

		$ratings = array();
		foreach ($review->ratings as $rating)
		{
			$rating['rating'] = ($rating['rating'] === '0.0') ? '?' : $rating['rating'];
			$rating['rating_perc'] = ($rating['rating'] * 10);

			$ratings[] = $rating;
		}

		return $ratings;
	}

	public function remarks()
	{
		return $this->format_remarks($this->_review['review']->remarks);
	}

	private function _get_section_videos($media_items, $section_id)
	{
		$media = array();
		foreach ($media_items as $media_item)
		{
			if ($media_item->type !== 'video' OR $media_item->review_section_id !== $section_id)
			{
				continue;
			}

			$media_item->embed = $this->format_youtube_as_embed($media_item->path);
			$media_item->thumb = $this->format_youtube_as_thumb($media_item->path);
			$media[] = $media_item;
		}

		return $media;
	}

	private function _get_section_images($media_items, $section_id)
	{
		$media = array();
		foreach ($media_items as $media_item)
		{
			if ($media_item->type !== 'image' OR $media_item->review_section_id !== $section_id)
			{
				continue;
			}

			$media_item->thumb = $this->get_image($media_item->path, 134, 126);
			$media_item->path = $this->get_image($media_item->path, 740, 'n', FALSE);
			$media[] = $media_item;
		}

		return $media;
	}
}