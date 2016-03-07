<?php

class View_Advise_List extends View_Advise_Items {

	use View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Advies van de mamaplaats redactie';
	public $description = 'Onze professionele advies blogs op mamaplaats';
	public $category_slug = '';
	public $featured_section = '';



	public function __construct($advise_list, $category,  $featured_section)
	{
		if ( ! empty($category->title))
		{
			$this->title = $category->title.' advies van de redactie';
			$this->category_slug = $category->slug;
		}

		$this->featured_section = $featured_section;

		parent::__construct($advise_list);
	}

}