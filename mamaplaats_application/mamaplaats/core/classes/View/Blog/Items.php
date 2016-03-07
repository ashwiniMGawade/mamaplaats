<?php

class View_Blog_Items {

	use View_Helper_ImagePath, View_Helper_PregnancyCalander;

	private $_blog_list;

	public function __construct($blog_list)
	{
		$this->_blog_list = $blog_list;
	}

	public function blog_list()
	{
		$blog_list = array();
		foreach ($this->_blog_list as $blog)
		{
			$blog['blog']->link_comments = ( ! empty($blog['blog']->comment_count)) ? 'comments' : 'reply_box_container';
			$media = $blog['media'];
			$media->path = $this->get_image_legacy($media->path, 230);

			$blog_item = $blog['blog'];
			$blog_item->excerpt = $blog_item->get_excerpt(120).'...';
			$blog_item->created_formatted = strftime('%e %b %Y', strtotime($blog_item->created));

			$blog_list[] = array_merge($blog, array('blog' => $blog_item, 'media' => $media));
		}

		return $blog_list;
	}
}