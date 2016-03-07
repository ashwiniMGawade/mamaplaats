<?php

class View_Featured_Section {

	use View_Helper_ImagePath;

	public function __construct($featured_section)
	{
		$this->_featured_section = $featured_section;
	}

	public function blocks()
	{
		$blocks = array();
		foreach ($this->_featured_section->blocks as $block)
		{
			$block['image'] = '/'.$block['image'];

			$number = $this->_number_to_word($block['order_number']);
			$blocks[$number] = $block;
		}

		return $blocks;
	}

	private function _number_to_word($number)
	{
		// We won't expect that we need more than 10 blocks
		// @todo: convert this to infinite when there is a need for it
		$number_words = array(
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six',
			7 => 'seven',
			8 => 'eight',
			9 => 'nine',
			10 => 'ten',
		);

		return $number_words[$number];
	}
}
