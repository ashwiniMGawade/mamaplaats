<?php

class View_Widget_LatestWin {

	use View_Helper_ImagePath;

	private $_latest_win;

	public function __construct($latest_win)
	{
		$this->_latest_win = $latest_win;
	}

	public function latest_win()
	{
		$latest_win = array();
		foreach ($this->_latest_win as $win)
		{
			$win['win']->excerpt = $win['win']->get_excerpt(110).'...';
			$win['media']->path = $this->get_image_legacy($win['media']->path, 132, 132);

			$latest_win[] = $win;
		}

		return $latest_win;
	}
}