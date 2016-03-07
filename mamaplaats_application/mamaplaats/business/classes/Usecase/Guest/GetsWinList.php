<?php

class Usecase_Guest_GetsWinList {

	/**
	 * @var Repository_Win
	 */
	private $_repository_win;

	public function __construct($repository_win)
	{
		$this->_repository_win = $repository_win;
	}

	public function execute($limit, $offset = 0)
	{
		// Don't load more than 200
		if ($limit > 200)
		{
			$limit = 200;
		}

		$open_win 	= $this->_repository_win->load_set_by_category_id(19, 20);
		$closed_win = $this->_repository_win->load_set_by_category_id(3161, (int) $limit, (int) $offset);

		return array('open' => $open_win, 'closed' => $closed_win);
	}
}