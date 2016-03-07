<?php

class View_Advise_Items {

	use View_Helper_ImagePath;

	private $_advise_list;

	public function __construct($advise_list)
	{
		$this->_advise_list = $advise_list;
	}

	/**
	 * @return string Load the basepath
	 */
	public function basepath()
	{
		return URL::base();
	}

	public function advise_list()
	{
		$advise_list = array();
		foreach ($this->_advise_list as $advise)
		{
			$advise['advise']->link_comments = ( ! empty($advise['advise']->comment_count)) ? 'comments' : 'reply_box_container';
			$media = $advise['media'];
			$media->path = $this->get_image_legacy($media->path, 230);

			$advise_item = $advise['advise'];
			$advise_item->excerpt = $advise_item->get_excerpt(120).'...';

			$advise_list[] = array_merge($advise, array('advise' => $advise_item, 'media' => $media));
		}

		return $advise_list;
	}
}