<?php

class View_Author_Blog {

	private $_blog_list;

	public function __construct($blog_list)
	{
		$this->_blog_list = $blog_list;
	}

	public function blog_list()
	{
		$blog_list = array();
		foreach ($this->_blog_list['blog_list'] as $blog)
		{
			$media = $blog['media'];
			$media->url = $media->path;

			$blog_item = $blog['blog'];
			$blog_item->created_formatted = strftime('%e %b %Y');

			$blog_list[] = array_merge($blog, array('blog' => $blog_item, 'media' => $media));
		}
		return $blog_list;
	}
}