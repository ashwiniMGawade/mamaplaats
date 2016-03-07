<?php defined('SYSPATH') or die('No direct script access.');

class View_Photo_Contest_Widget_Upload extends View_Photo_Contest {

	/**
	 * @param Model_Photo_Contest $photo_contest The photo contest for this view
	 */
	public function __construct(Model_Photo_Contest $photo_contest)
	{
		$this->_photo_contest = $photo_contest;

		parent::__construct();
	}

} // End View_Photo_Contest_Widget_Top
