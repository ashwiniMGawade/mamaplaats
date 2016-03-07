<?php

class Usecase_Admin_SendsDailyCommentDigest {

	/**
	 * @var Repository_Comment
	 */
	private $_repository_comment;

	/**
	 * @var Repository_Blog
	 */
	private $_repository_blog;

	/**
	 * @var Message
	 */
	private $_message;

	public function __construct($repository_comment, $repository_blog, $message)
	{
		$this->_repository_comment = $repository_comment;
		$this->_repository_blog = $repository_blog;
		$this->_message = $message;
	}

	public function execute()
	{
		$comments = $this->_get_comments_aggregated_by_blog();
		if (empty($comments))
		{
			return FALSE;
		}

		$blog_ids = array_keys($comments);

		$author_blogs = $this->_get_blogs_aggregated_by_author($blog_ids);
		foreach ($author_blogs as $blogs)
		{
			$user = FALSE;
			foreach ($blogs as $i => $blog)
			{
				// Get the user from the blogs
				if ($user === FALSE AND ! empty($blog['user']->email))
				{
					$user = $blog['user'];
				}

				// Merge the comments into the blogs
				$blog['comments'] = $comments[$blog['blog']->id];
				$blogs[$i] = $blog;
			}

			$this->_message->send(
				'DailyCommentDigest',
				array(
					'user' 		=> $user,
					'blogs' 	=> $blogs,
					'subject' 	=> $user->display_name.', er is gereageerd op jouw blog!',
					'receiver'	=> $user->email,
					'sender'	=> 'info@mamaplaats.nl',
				)
			);
		}

		return TRUE;
	}

	private function _get_comments_aggregated_by_blog()
	{
		$comments = $this->_repository_comment->load_set_advanced(array(
			array('date', '>=', date('Y-m-d H:i:s', strtotime('-5 minutes'))),
			array('approved', '=', 1),
		));

		$blog_comments = array();
		foreach ($comments as $comment)
		{
			$blog_comments[$comment->post_id][] = $comment;
		}

		return $blog_comments;
	}

	private function _get_blogs_aggregated_by_author(array $blog_ids)
	{
		$blogs = $this->_repository_blog->load_set_advanced(array(array('blog.ID', 'IN', $blog_ids)));

		$author_blogs = array();
		foreach ($blogs as $blog)
		{
			$user = $blog['user'];
			$author_blogs[$user->id][] = $blog;
		}

		return $author_blogs;
	}
}