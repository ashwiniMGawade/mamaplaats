<?php

class View_Expert_List {

	use View_Helper_ImagePath, View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Expert';
	public $description = 'Onze expert blogs op mamaplaats';
	public $featured_section = '';
	public $category_slug = '';

	private $_expert_list;

	public function __construct($expert_list, $featured_section, $category_slug)
	{
		$this->_expert_list = $expert_list;
		$this->featured_section = $featured_section;
		$this->category_slug = $category_slug;
	}

	public function expert_list()
	{
		$expert_list = array();
		foreach ($this->_expert_list['expert_list'] as $expert)
		{
			$expert['expert']->link_comments = ( ! empty($expert['expert']->comment_count)) ? 'comments' : 'reply_box_container';
			$media = $expert['media'];
			$media->path = $this->get_image_legacy($media->path, 230);

			$expert_item = $expert['expert'];
			$expert_item->excerpt = $expert_item->get_excerpt(120).'...';
			$expert_item->created_formatted = strftime('%e %b %Y', strtotime($expert_item->created));

			$expert_list[] = array_merge($expert, array('expert' => $expert_item, 'media' => $media));
		}

		return $expert_list;
	}

    public function show_script() {
        if ("thuis-expert" == $this->category_slug) {
            return true;
        }
        return false;
    }
}