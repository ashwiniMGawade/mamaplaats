<?php

class View_Widget_LatestComments {

	use View_Helper_Time, View_Helper_ImagePath;

	private $_latest_comments;

	public function __construct($latest_comments)
	{
		$this->_latest_comments = $latest_comments;
	}

	public function latest_comments()
	{
		$latest_comments = array();
		foreach ($this->_latest_comments as $comment)
		{
			$comment->time_ago = $this->get_time_ago($comment->date);
			$comment->content = substr($comment->content, 0, 80).'...';
			$comment->avatar = $this->get_image_path('avatar', $comment->author_id, 50, 50, $comment->profile_image_ext);

			$latest_comments[] = $comment;
		}

		return $latest_comments;
	}
}