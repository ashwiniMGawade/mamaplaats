<?php

class Widget_LatestComments {

	/**
	 * @var Repository_Comment
	 */
	private $_repository_comment;

	public function __construct($repository_comment)
	{
		$this->_repository_comment = $repository_comment;
	}

	public function load()
	{
		$filters = array(
			array('approved', '=', 1),
		);

		return $this->_repository_comment->load_set_advanced($filters, 'id', 'DESC', 3, 0);
	}
}