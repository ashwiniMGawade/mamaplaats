<?php

class View_Win_List extends View_Win_ClosedItems {

	use View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Winacties';
	public $description = 'Hieronder vind je de leukste winacties waarmee je prijzen kunt winnen. Mamaplaats heeft al vele winacties gehad met onder andere een Dapper kinderstoel';

	public function open_win()
	{
		$win_open = array();
		foreach ($this->_win_list['open'] as $win)
		{
			$win['win']->link_comments = ( ! empty($win['win']->comment_count)) ? 'comments' : 'reply_box_container';
			$win['media']->path = $this->get_image_legacy($win['media']->path, 259, 242);
			$win['win']->end_date = $this->_get_days($win['win']->end_date);
			$win_open[] = $win;
		}

		return $win_open;
	}

	private function _get_days($date)
	{
		if (empty($date))
		{
			return '1 dag';
		}

		$days = Date::span(time(), strtotime($date), 'days');
		$prefix = ($days > 1) ? ' dagen' : ' dag';

		return $days.$prefix;
	}
}