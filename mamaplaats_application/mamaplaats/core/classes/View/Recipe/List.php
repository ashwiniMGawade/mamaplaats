<?php

class View_Recipe_List {

	use View_Helper_ImagePath, View_Helper_PregnancyCalander;

	public $title = 'Recepten';
	public $description = 'Onze recepten op mamaplaats';
	public $category_slug = '';
	public $featured_section = '';

	private $_recipe_list;

	public function __construct($recipe_list, $category, $featured_section)
	{
		if ( ! empty($category->title))
		{
			$this->category_slug = $category->slug;
		}

		$this->_recipe_list = $recipe_list;
		$this->featured_section = $featured_section;
	}

	public function recipe_list()
	{
		$recipe_list = array();
		foreach ($this->_recipe_list as $recipe)
		{
			$recipe['blog']->link_comments = ( ! empty($recipe['blog']->comment_count)) ? 'comments' : 'reply_box_container';
			$media = $recipe['media'];
			$media->path = $this->get_image_legacy($media->path, 230);

			$recipe_item = $recipe['blog'];
			$recipe_item->excerpt = $recipe_item->get_excerpt(120).'...';
			$recipe_item->created_formatted = strftime('%e %b %Y', strtotime($recipe_item->created));

			$recipe_list[] = array_merge($recipe, array('blog' => $recipe_item, 'media' => $media));
		}

		return $recipe_list;
	}
}