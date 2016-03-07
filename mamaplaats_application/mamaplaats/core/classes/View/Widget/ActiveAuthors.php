<?php

class View_Widget_ActiveAuthors {

	use View_Helper_ImagePath;

	private $_active_authors;

	public function __construct($active_authors)
	{
		$this->_active_authors = $active_authors;
	}

	public function active_authors()
	{
		$authors = array();
		foreach ($this->_active_authors as $author)
		{
			$author->avatar = $this->get_image_path('avatar', $author->id, 50, 50, $author->profile_image_ext);
			$authors[] = $author;
		}

		return $authors;
	}
}