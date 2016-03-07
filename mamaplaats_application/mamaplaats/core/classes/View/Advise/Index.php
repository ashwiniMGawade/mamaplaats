<?php

class View_Advise_Index {

	use View_Helper_Message, View_Helper_Comment, View_Helper_ImagePath, View_Helper_PregnancyCalander;
    use View_Helper_Device, View_Helper_Advertisements;

	private $_advise;
	private $_user;
	public $widgets;

	public function __construct($advise, $user, $widgets, $message)
	{
		$this->title = $advise['advise']->get_meta_title();
		$this->description = $advise['advise']->get_meta_description();

		// Create the thumbnail URL
		if ( ! empty($advise['image']))
		{
			$advise['advise']->thumbnail = $this->get_image_legacy($advise['image']->path, 750, 'n', FALSE);
			$this->image = URL::site($advise['advise']->thumbnail, TRUE);
		}

		$this->comment_item_id = $advise['advise']->id;
		$this->comment_author_id = $advise['advise']->author_id;

		$this->_advise = $advise;
		$this->_user = $user;
		$this->widgets = $widgets;
		$this->messages = $message;
	}

	/**
	 * @return string Load the basepath
	 */
	public function basepath()
	{
		return URL::base();
	}

	public function logged_in()
	{
		if (empty($this->_user))
		{
			return array();
		}
		return $this->_user;
	}

	public function advise()
	{
		return $this->_advise['advise'];
	}

	public function author()
	{
		$author = $this->_advise['author'];
		$author->avatar = $this->get_image_path('avatar', $author->id, 140, 140, $author->profile_image_ext);

		return $author;
	}

	public function related()
	{
		$related_advises = array();
		foreach ($this->_advise['related'] as $related_advise)
		{
			$related_advise['image']->path = $this->get_image_legacy($related_advise['image']->path, 228, 213);
			$related_advise['advise']->excerpt = $related_advise['advise']->get_excerpt(90);
			$related_advises[] = $related_advise;
		}

		return $related_advises;
	}

	public function comments()
	{
		return array(
			'children' => $this->format_comments($this->_advise['comments']),
			'link_comments' => ( ! empty($this->_advise['comments'])) ? 'comments' : 'reply_box_container'
		);
	}

	public function has_messages()
	{
		return $this->get_messages();
	}

	public function next_blog()
	{
		return $this->_advise['next_blog'];
	}

	public function previous_blog()
	{
		return $this->_advise['previous_blog'];
	}

	public function link_comments()
	{
		return ( ! empty($this->_advise['comments'])) ? 'comments' : 'reply_box_container';
	}
}