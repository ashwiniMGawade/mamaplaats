<?php

class View_Author_List {

	use View_Helper_Select, View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

	public $title = 'Bloggers Lijst';
	public $description = 'Bekijk hier alle blogsters van Mamaplaats. Lees blogs van Elise, Sandra, Simone en Susanne. Wil jij ook blogster worden? Kijk snel verder en meld je aan!';

	private $_author_list;
	private $_selected_letter;

	public function __construct($author_list, $selected_letter)
	{
		$this->_author_list	= $author_list;
		$this->_selected_letter	= $selected_letter;
	}

	public function alphabet()
	{
		$letters = range('A', 'Z');
		return $this->select_list(array_combine($letters, $letters), $this->_selected_letter);
	}

	public function blogger_list()
	{
		$blogger_list = array();

		foreach ($this->_author_list AS $blogger)
		{
			$blogger->avatar = $this->get_image_path('avatar', $blogger->id, 140, 120, $blogger->profile_image_ext);
			$blogger_list[] = $blogger;
		}

		return $blogger_list;
	}

}