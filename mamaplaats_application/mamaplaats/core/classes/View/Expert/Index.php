<?php

class View_Expert_Index {

	use View_Helper_Message, View_Helper_Comment, View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

	private $_expert;
	private $_user;
	public $widgets;
	public $script_urls_array;

	public function __construct($expert, $user, $widgets, $message, $script_urls_array)
	{
		$this->title = $expert['expert']->get_meta_title();
		$this->description = $expert['expert']->get_meta_description();

		// Create the thumbnail URL
		if ( ! empty($expert['image']))
		{
			$expert['expert']->thumbnail = $this->get_image_legacy($expert['image']->path, 750, 'n', FALSE);
			$this->image = URL::site($expert['expert']->thumbnail, TRUE);
		}

		$this->comment_item_id = $expert['expert']->id;
		$this->comment_author_id = $expert['expert']->author_id;

		$this->_expert = $expert;
		$this->_user = $user;
		$this->widgets = $widgets;
		$this->messages = $message;
		$this->script_urls_array = $script_urls_array;
	}

	public function logged_in()
	{
		if (empty($this->_user))
		{
			return array();
		}
		return $this->_user;
	}

    public function show_script()
    {
        if(in_array(trim($this->_expert['expert']->slug), $this->script_urls_array)) {
            return true;
        }
        return false;
    }

	public function expert()
	{
		$expert = $this->_expert['expert'];
		$expert->created_formatted = strftime('%A %e %B %Y', strtotime($expert->created));

		return $expert;
	}

	public function author()
	{
		$author = $this->_expert['author'];
		$author->avatar = $this->get_image_path('avatar', $author->id, 140, 140, $author->profile_image_ext);

		return $author;
	}

	public function related()
	{
		$related_items = array();
		foreach ($this->_expert['related'] as $related)
		{
			$related['image']->path = $this->get_image_legacy($related['image']->path, 228, 213);
			$related['expert']->excerpt = $related['expert']->get_excerpt(90);
			$related_items[] = $related;
		}

		return $related_items;
	}

	public function comments()
	{
		return array(
			'children' => $this->format_comments($this->_expert['comments'])
		);
	}

	public function has_messages()
	{
		return $this->get_messages();
	}

	public function next_blog()
	{
		return $this->_expert['next_blog'];
	}

	public function previous_blog()
	{
		return $this->_expert['previous_blog'];
	}

	public function link_comments()
	{
		return ( ! empty($this->_expert['comments'])) ? 'comments' : 'reply_box_container';
	}
}