<?php

trait View_Helper_PregnancyCalander {

	/**
	 * @return string Load the basepath
	 */
	public function basepath()
	{
		return URL::base();
	}

	public function pregnancy_calendar()
	{
		$calendar = array();
		$info_array	 		= Kohana::$config->load('info_arrays');

		foreach ($info_array['pregnancy_calendar'] as $key => $value)
		{
			$week = array(
				'title'	=> str_replace('-', ' ', $key),
				'url'	=> $value,
				'image' => $key,
			);

			$calendar[] = $week;
		}
		return $calendar;
	}

	public function after_birth_calendar()
	{
		$calendar = array();
		$info_array	 		= Kohana::$config->load('info_arrays');

		foreach ($info_array['after_birth_calendar'] as $key => $value)
		{
			$month = array(
				'title'	=> str_replace('-', ' ', $key),
				'url'	=> $value,
				'image' => $key,
			);

			$calendar[] = $month;
		}
		return $calendar;
	}
}