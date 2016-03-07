<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Review_Index {

	use View_Helper_Select, View_Helper_ImagePath, View_Helper_Message, View_Helper_Formatting;

	private $_review;

	public function __construct($review, $messages)
	{
		$this->_review = $review;
		$this->messages = $messages;
	}

	public function user()
	{
		$user = $this->_review['user'];
		$user->avatar = $this->get_image_path('avatar', $user->id, 200, 200, $user->profile_image_ext);
		return $user;
	}

	public function review()
	{
		return $this->_review['review'];
	}

	public function review_sections()
	{
		return $this->_review['review']->sections;
	}

	public function review_ratings()
	{
		return $this->_review['review']->ratings;
	}

	public function review_remarks()
	{
		return json_encode($this->_review['review']->remarks);
	}

	public function product()
	{
		return $this->_review['product'];
	}

	public function media()
	{
		$sections 	= array('' => '') + array_column($this->_review['review']->sections, 'question', 'id');
		$review_id 	= $this->_review['review']->id;

		$media_list = array();
		foreach ($this->_review['media'] as $media)
		{
			$media->sample = '/'.$media->path;
			if ($media->type == 'video')
			{
				$media->sample = $this->format_youtube_as_thumb($media->path);
			}

			$media->is_image 	= ($media->type == 'image');
			$media->is_video	= ($media->type == 'video');
			$media->sections 	= $this->select_list($sections, $media->review_section_id);
			$media->review_id 	= $review_id;

			$media_list[] = $media;
		}

		usort($media_list, function ($a, $b) {
			return $a->title > $b->title;
		});

		return $media_list;
	}

	public function media_types()
	{
		return $this->select_list(array('image' => 'Afbeelding', 'video' => 'Video'));
	}

	public function statuses()
	{
		return $this->select_list(array(
			'waiting' => 'Wacht op Keuring',
			'approved' => 'Goedgekeurd',
			'denied' => 'Afgekeurd',
			'published' => 'Gepubliceerd',
		), $this->_review['review']->status);
	}
}