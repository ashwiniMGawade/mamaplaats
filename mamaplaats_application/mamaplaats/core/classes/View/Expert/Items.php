<?php

class View_Expert_Items {

	use View_Helper_ImagePath;

	private $_expert_list;

	public function __construct($expert_list)
	{
		$this->_expert_list = $expert_list;
	}

	/**
	 * @return string Load the basepath
	 */
	public function basepath()
	{
		return URL::base();
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
}