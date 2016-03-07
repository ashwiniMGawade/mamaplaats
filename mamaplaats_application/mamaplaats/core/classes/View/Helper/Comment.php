<?php

trait View_Helper_Comment {

	protected $allow_guest_reply = TRUE;

	public $comment_item_id;
	public $comment_author_id;

	private $_comment_count = 1;

	public function reply_as_user()
	{
		return ( ! empty($this->_user->id)) ? $this->_user : FALSE;
	}

	public function reply_as_guest()
	{
		return (empty($this->_user->id) AND $this->allow_guest_reply === TRUE);
	}

	public function reply_as_guest_not_allowed()
	{
		return (empty($this->_user->id) AND $this->allow_guest_reply !== TRUE);
	}

	protected function format_comments($comments)
	{
		$formatted_comments = array();
		foreach ($comments as $comment)
		{
			// Don't Display Spam or Unapproved Comments
			if ($comment->approved != 1)
			{
				continue;
			}

			$comment->is_author 	= ( ! empty($this->comment_author_id) AND $comment->user_id == $this->comment_author_id);
			$comment->author_avatar = $this->_get_author_avatar($comment->author_id, $comment->profile_image_ext);
			$comment->date 			= strftime('%A %e %B %G', strtotime($comment->date));
			$comment->number 		= $this->_comment_count++;

			if ( ! empty($comment->children))
			{
				$comment->children = $this->format_comments($comment->children);
			}

			$formatted_comments[] = $comment;
		}

		return $formatted_comments;
	}

	private function _get_author_avatar($id, $extension='png')
	{
		if( empty($extension)){
			$extension  =   "png";
		}

		if ( ! file_exists('uploads/avatar/'.$id.'.'.$extension))
		{
			$id = 'default';
			$extension = "png";
		}

		return '/image/avatar/'.$id.'_32x32.'.$extension;
	}
}