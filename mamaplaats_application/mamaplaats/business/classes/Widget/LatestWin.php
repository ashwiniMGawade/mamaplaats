<?php

class Widget_LatestWin {

	/**
	 * @var Repository_Win
	 */
	private $_repository_win;

	public function __construct($repository_win)
	{
		$this->_repository_win = $repository_win;
	}

	public function load()
	{
		return $this->_repository_win->load_set_by_category_id(19, 2);
	}
}