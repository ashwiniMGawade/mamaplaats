<?php

class View_Widget_MostViewedBlogs {

	use View_Helper_ImagePath, View_Helper_Advertisements;

	private $_most_viewed_blogs;

	public function __construct($most_viewed_blogs)
	{
		$this->_most_viewed_blogs = $most_viewed_blogs;
	}

	public function most_viewed_blogs()
	{
		$position = 0;
		$most_viewed_blogs = array();
		foreach ($this->_most_viewed_blogs as $most_viewed_blog)
		{
			$position++;
			$most_viewed_blog['blog']->position = $position;
			$most_viewed_blog['blog']->excerpt = $most_viewed_blog['blog']->get_excerpt(40).'...';
			$most_viewed_blog['media']->path = $this->get_image_legacy($most_viewed_blog['media']->path, 112, 110);

			$most_viewed_blogs[] = $most_viewed_blog;
		}

		return $most_viewed_blogs;
	}
}