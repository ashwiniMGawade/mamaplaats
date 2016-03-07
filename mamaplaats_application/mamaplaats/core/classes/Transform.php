<?php

class Transform {

	public static function combine_date_fields(array $fields)
	{
		$combined_date = '';
		$combined_date .= (isset($fields['year'])) ? $fields['year'].'-' : '' ;
		$combined_date .= (isset($fields['month'])) ? $fields['month'].'-' : '' ;
		$combined_date .= (isset($fields['day'])) ? $fields['day'] : '' ;

		return $combined_date;
	}

}