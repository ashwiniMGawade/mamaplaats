<?php defined('SYSPATH') or die('No direct script access.');

class Valid extends Kohana_Valid {

	public static function agree($value)
	{
		return ($value == 1);
	}

	public static function min_words($value, $words)
	{
		return str_word_count(strip_tags($value)) >= $words;
	}

	public static function max_words($value, $words)
	{
		return str_word_count(strip_tags($value)) <= $words;
	}

	public static function contains($value, $word, $count = 1)
	{
		return (substr_count($value, $word) >= $count);
	}
}
