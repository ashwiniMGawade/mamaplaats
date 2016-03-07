<?php

class View_Win_Index {

	use View_Helper_Message, View_Helper_Comment, View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

	private $_win;
	private $_user;
    private $_query;
    private $_post;
	public $widgets;

	public function __construct($win, $user, $widgets, $message, $query, $post)
	{
		$this->title = $win['win']->get_meta_title();
		$this->description = $win['win']->get_meta_description();

		// Create the thumbnail URL
		if ( ! empty($win['image']))
		{
			$win['win']->thumbnail = URL::site($this->get_image_legacy($win['image']->path, 750, 'n', FALSE), TRUE);
			$this->image = $win['win']->thumbnail;
		}

		$this->comment_item_id = $win['win']->id;
		$this->comment_author_id = $win['win']->author_id;
		$this->allow_guest_reply = FALSE;

		$this->_win = $win;
		$this->_user = $user;
		$this->widgets = $widgets;
		$this->messages = $message;
        $this->_query = $query;
        $this->_post = $post;
	}

	public function win()
	{
		$win = $this->_win['win'];
		$win->created = strftime('%A %e %B %G', strtotime($win->created));

		$winners = array();
		foreach ($win->winners as $winner)
		{
			$winner->avatar_path = $this->get_image_path('avatar', $winner->id, 202, 194, $winner->profile_image_ext);
			$winners[] = $winner;
		}

		$win->winners = $winners;

		return $win;
	}

	public function winners_known()
	{
		return ( ! empty($this->_win['win']->winners));
	}

	public function author()
	{
		return $this->_win['author'];
	}

	public function comments()
	{
		return array(
			'children' => $this->format_comments($this->_win['comments'])
		);
	}

	public function has_messages()
	{
		return $this->get_messages();
	}

	public function link_comments()
	{
		return ( ! empty($this->_win['comments'])) ? 'comments' : 'reply_box_container';
	}

    public function referrer()
    {
        return (!empty($this->_query['referrer']) and empty($this->_post['comment']));
    }
}