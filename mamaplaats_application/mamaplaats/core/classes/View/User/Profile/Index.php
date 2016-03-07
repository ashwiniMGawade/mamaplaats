<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Profile_Index {

	use View_Helper_ImagePath;

	public $title = 'Mijn Blogs';

	private $_profile;

	private $_request_url;

	public function __construct(array $profile, $request_url)
	{
		$this->_profile	= $profile;
		$this->_request_url = $request_url;
	}

	public function timeline()
	{
		$timeline = array();
		foreach ($this->_profile['timeline'] as $timeline_item)
		{
			$activity = $timeline_item['activity'];
			$user   =   $timeline_item['user'];
			$activity->image_path 	= $this->get_image_path('avatar', $activity->user_id, 100, 100, $user->profile_image_ext);
			$activity->date 		= date('d-m-Y H:i', strtotime($activity->date));

			$timeline[] = array_merge($timeline_item, array('activity' => $activity));
		}

		return $timeline;
	}

	public function blogs()
	{
		$blogs = array();
		foreach ($this->_profile['blog_list'] as $blog)
		{
			$blog['media']->path = $this->get_image_legacy($blog['media']->path, 230);
			$blog['blog']->created_formatted = strftime('%e %b %Y', strtotime($blog['blog']->created));
			$blog['blog']->excerpt = $blog['blog']->get_excerpt(100).'...';

			$blogs[] = $blog;
		}

		return $blogs;
	}

	public function top_blogs()
	{
		$blogs = array();
		foreach ($this->_profile['top_blog_list'] as $blog)
		{
			$blog['media']->path = $this->get_image_legacy($blog['media']->path, 230);
			$blog['blog']->created_formatted = strftime('%e %b %Y', strtotime($blog['blog']->created));
			$blog['blog']->excerpt = $blog['blog']->get_excerpt(100).'...';

			$blogs[] = $blog;
		}

		return $blogs;
	}

	public function following()
	{
		return (isset($this->_profile['following']) AND ! empty($this->_profile['following']));
	}

	public function show_sections()
	{
		$current_url = $this->_request_url->uri();
		$sections = array();
		$sections['show_top_blogs'] = TRUE;
		if ($current_url == "user/profile/dashboard")
		{
			$sections['show_timelines'] = TRUE;
			$sections['show_top_blogs'] = FALSE;
		}

		return $sections;
	}

	public function own_blogs()
	{
		$blogs = array();
		foreach ($this->_profile['own_blog_list'] as $blog)
		{
			$blog['media']->path = $this->get_image_legacy($blog['media']->path, 230);
			$blog['blog']->created_formatted = strftime('%e %b %Y', strtotime($blog['blog']->created));
			$blog['blog']->excerpt = $blog['blog']->get_excerpt(100).'...';

			$blogs[] = $blog;
		}

		return $blogs;
	}

	public function load_more_following_blogs()
	{
		if( ! empty($this->_profile['blog_list']) AND count($this->_profile['blog_list']) == 3)
		{
			return true;
		}

		return false;
	}

	public function load_more_top_blogs()
	{
		if( ! empty($this->_profile['top_blog_list']) AND count($this->_profile['top_blog_list']) == 3)
		{
			return true;
		}

		return false;
	}

	public function load_more_blogs()
	{
		if( ! empty($this->_profile['own_blog_list']) AND count($this->_profile['own_blog_list']) == 3)
		{
			return true;
		}

		return false;
	}
}