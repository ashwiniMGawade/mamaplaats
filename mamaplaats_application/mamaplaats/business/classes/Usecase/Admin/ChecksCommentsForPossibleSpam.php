<?php

class Usecase_Admin_ChecksCommentsForPossibleSpam {

	/**
	 * @var Repository_Comment
	 */
	private $_repository_comment;

	/**
	 * @var Spam_CountryChecker
	 */
	private $_spam_country_checker;

	public function __construct($repository_comment, $spam_country_checker)
	{
		$this->_repository_comment = $repository_comment;
		$this->_spam_country_checker = $spam_country_checker;
	}

	public function execute()
	{
		$comments = $this->_repository_comment->load_set(array(
			array('approved', '=', 1),
			array('date', '>', date('Y-m-d H:i:s', strtotime('-2 minutes'))),
		));

		foreach ($comments as $comment)
		{
			$allowed_countries = array('NL', 'BE', 'DE', 'EN', 'CW');
			$is_possible_spam = $this->_spam_country_checker->comment_is_possible_spam($comment, $allowed_countries);

			if ($is_possible_spam === TRUE)
			{
				// Unapprove the comment
				$comment->approved = 0;
				$this->_repository_comment->update($comment);
			}

			// Sleep for a moment so we don't ddos the api
			sleep(1);
		}
	}
}