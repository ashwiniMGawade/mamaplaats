<?php

class Usecase_Editor_UpdatesCouponSlider {

	/**
	 * @var Repository_Coupon_Slide
	 */
	private $_repository_slide;

	/**
	 * @var Validate_Coupon_Slide
	 */
	private $_validate_slide;

	public function __construct($repository_slide, $validate_slide)
	{
		$this->_repository_slide = $repository_slide;
		$this->_validate_slide = $validate_slide;
	}

	public function execute(array $slides)
	{
		foreach ($slides as $slide)
		{
			if ($this->_validate_slide($slide) !== TRUE)
			{
				continue;
			}

			if ( ! empty($slide['id']))
			{
				$this->_update_slide($slide);
			}
			else
			{
				$this->_create_slide($slide);
			}
		}
	}

	private function _validate_slide(array $slide)
	{
		$this->_validate_slide->load($slide);
		$this->_validate_slide->default_rules();

		return $this->_validate_slide->check();
	}

	private function _update_slide($fields)
	{
		$slide = $this->_repository_slide->load_object(array(array('id', '=', $fields['id'])));
		$slide = $this->_match_slide_fields($slide, $fields);

		return $this->_repository_slide->update($slide);
	}

	private function _create_slide($fields)
	{
		$slide = new Entity_Coupon_Slide;
		$slide = $this->_match_slide_fields($slide, $fields);

		return $this->_repository_slide->create($slide);
	}

	private function _match_slide_fields(Entity_Coupon_Slide $slide, array $fields)
	{
		$slide->title 	= Arr::get($fields, 'title', '');
		$slide->image 	= Arr::get($fields, 'image', '');
		$slide->url 	= Arr::get($fields, 'url', '');
		$slide->order 	= Arr::get($fields, 'order', 1);

		return $slide;
	}
}