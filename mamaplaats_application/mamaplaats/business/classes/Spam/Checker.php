<?php

class Spam_Checker {

	public function comment_is_spam(Entity_Comment $comment, array $extra_info)
	{
		$comment = array(
			'blog'                  => $extra_info['blog_url'],
			'referrer'              => $extra_info['referrer'],
			'permalink'             => $extra_info['page_url'],
			'user_ip'               => $extra_info['ip'],
			'user_agent'            => $extra_info['agent'],
			'comment_author'        => $comment->author_name,
			'comment_author_email'  => $comment->author_email,
			'comment_author_url'    => $comment->author_url,
			'comment_content'       => $comment->content,
			'comment_type'          => 'comment',
		);

		return $this->_check_if_spam($comment);
	}

	private function _check_if_spam(array $item)
	{
		return Akismet::factory()->is_spam($item);
	}
}