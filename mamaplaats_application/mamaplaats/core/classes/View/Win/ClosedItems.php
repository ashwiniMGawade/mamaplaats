<?php

class View_Win_ClosedItems {

	use View_Helper_ImagePath;

	protected $_win_list;

	public function __construct($win_list)
	{
		$this->_win_list = $win_list;
	}

	public function closed_win()
	{
		$win_closed = array();
		foreach ($this->_win_list['closed'] as $win)
		{
			if (empty($win['win']->winners))
			{
				$win['win']->winners = 'Geen';
			}
			elseif (count($win['win']->winners) > 1)
			{
				$win['win']->winners = 'Meerdere';
			}
			else
			{
				$first_winner = $win['win']->winners[0];
				$win['win']->winners = $first_winner->full_name();
			}

			$win['win']->link_comments = ( ! empty($win['win']->comment_count)) ? 'comments' : 'reply_box_container';
			$win['media']->path = $this->get_image_legacy($win['media']->path, 202, 194);

			$win_closed[] = $win;
		}

		return $win_closed;
	}
}