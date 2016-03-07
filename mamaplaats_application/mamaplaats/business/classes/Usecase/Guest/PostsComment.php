<?php

class Usecase_Guest_PostsComment {

	/**
	 * @var	Repository_Comment
	 */
	private $_repository_comment;

	/**
	 * @var Validate_Template
	 */
	private $_validate;

	/**
	 * @var Spam_Checker
	 */
	private $_spam_checker;

	public function __construct($repository_comment, $validate, $spam_checker)
	{
		$this->_repository_comment 	= $repository_comment;
		$this->_validate			= $validate;
		$this->_spam_checker		= $spam_checker;
	}

	public function execute(array $fields, array $extra_info)
	{
		$comment = new Entity_Comment;
		$comment->post_id		= $fields['item_id'];
		$comment->parent_id		= (isset($fields['parent_id'])) ? $fields['parent_id'] : 0;
		$comment->author_name 	= $fields['author'];
		$comment->author_email 	= $fields['email'];
		$comment->content 		= $fields['content'];
		$comment->date			= date('Y-m-d H:i:s');
		$comment->date_gmt		= gmdate('Y-m-d H:i:s');
		$comment->agent			= $extra_info['agent'];
		$comment->author_ip		= $extra_info['ip'];

		// Disapprove a spam comment
		if ($this->_spam_checker->comment_is_spam($comment, $extra_info) === TRUE)
		{
			$comment->approved = 'spam';
		}

		$this->_validate($comment);

		return $this->_repository_comment->create($comment);
	}

	private function _validate(Entity_Comment $comment)
	{
		$this->_validate->load($comment->as_array());
		$this->_validate->rules(
			array(
				'post_id'		=> array(array('not_empty'), array('digit')),
				'author_name' 	=> array(array('not_empty')),
				'author_email' 	=> array(array('not_empty'), array('email')),
				'content' 		=> array(array('not_empty')),
			)
		);

		if ($this->_validate->check() !== TRUE)
		{
			Throw new Validate_Exception('Invalid comment posted', $this->_validate->errors());
		}
	}
}