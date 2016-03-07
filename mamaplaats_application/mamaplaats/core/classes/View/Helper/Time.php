<?php

trait View_Helper_Time {

	protected function get_time_ago($date)
	{
		$time = time() - strtotime($date); // to get the time since that moment

		$tokens = array (
			31536000 	=> 'jaar',
			2592000 	=> 'maand',
			604800 		=> 'week',
			86400 		=> 'dag',
			3600 		=> 'uur',
			60 			=> 'minuut',
			1 			=> 'seconde'
		);

		foreach ($tokens as $unit => $text)
		{
			if ($time < $unit)
			{
				continue;
			}

			$unit_amount = floor($time / $unit);

			return $unit_amount.' '.(($unit_amount > 1) ? $this->_make_plural($text): $text);
		}

		return '';
	}

	protected function get_year_range($down_count, $up_count = 0, $sort = 'DESC')
	{
		$low_year = date('Y', strtotime('-'.$down_count.'years'));
		$high_year = date('Y', strtotime('+'.$up_count.'years'));

		if ($sort == 'DESC')
		{
			$range = range($high_year, $low_year);
		}
		else
		{
			$range = range($low_year, $high_year);
		}

		return array_combine($range, $range);
	}

	private function _make_plural($text)
	{
		$map = array(
			'jaar' 		=> 'jaren',
			'maand' 	=> 'maanden',
			'week' 		=> 'weken' ,
			'dag'  		=> 'dagen',
			'uur' 		=> 'uren',
			'minuut' 	=> 'minuten',
			'seconde' 	=> 'seconden',
		);

		foreach ($map as $key => $value)
		{
			if ($key == $text)
			{
				return $value;
			}
		}

		return '';
	}
}