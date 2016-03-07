<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Slider_Index {

	use View_Helper_ImagePath, View_Helper_Message;

	private $_slides;

	public function __construct($slides, $messages)
	{
		$this->_slides = $slides;
		$this->messages = $messages;
	}

	public function slides()
	{
		// $shop->image = $this->get_image('coupon/shop/'.$shop->id.'.jpg', 180, 180);

		return $this->_slides;
	}
}