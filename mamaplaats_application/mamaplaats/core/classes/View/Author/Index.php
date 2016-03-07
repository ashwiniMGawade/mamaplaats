<?php

class View_Author_Index {

	use View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

	private $_user;
	private $_author;
	private $_blog_list;

	public function __construct($user, $author, $blog_list)
	{
		$this->_user 		= $user;
		$this->_author 		= $author;
		$this->_blog_list 	= $blog_list;

		$this->title 		= 'Profiel van '.$this->_author->full_name();
		$this->description 	= $author->biography;
	}

	public function author()
	{
		$author = $this->_author;
		$author->avatar 			= $this->get_image_path('avatar', $author->id, 140, 120, $author->profile_image_ext);
		$author->registration_date 	= strftime('%B %Y', strtotime($author->registration_date));

		return $author;
	}

	public function blog_list()
	{
		$blog_list = array();
		foreach ($this->_blog_list AS $blog)
		{
			$blog['blog']->excerpt = $blog['blog']->get_excerpt(140).'...';
			$blog['blog']->created_formatted = strftime('%e %B %Y', strtotime($blog['blog']->created));
			$blog['media']->path = $this->get_image_legacy($blog['media']->path, 230);

			$blog_list[] = $blog;
		}

		return $blog_list;
	}

	public function show_load_more()
	{
		return (count($this->_blog_list) >= 15);
	}

	public function logged_in()
	{
		if ($this->_user == NULL)
		{
			return FALSE;
		}
		
		return TRUE;
	}
}