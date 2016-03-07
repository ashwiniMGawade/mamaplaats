<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Coupon_Category_Index {

	use View_Helper_Select, View_Helper_ImagePath, View_Helper_Message;

	private $_category;

	public function __construct($category, $messages)
	{
		$this->_category = $category;
		$this->messages = $messages;
	}

	public function category()
	{
		return $this->_category;
	}

	public function popular()
	{
		return $this->select_list(array(0 => 'Nee', 1 => 'Ja'), $this->_category->is_popular);
	}
	
	public function icons()
	{
		$icons = array(
			'yoga',
			'wheel',
			'violin',
			'view_details',
			'vegetarian_food',
			'tv',
			't-shirt',
			'trousers',
			'teddybear',
			'teapot',
			'snow',
			'sleeping',
			'shoe_man',
			'shirt',
			'sheep',
			'seahorse',
			'screwdriver',
			'scooter',
			'scissors',
			'ring',
			'recurring_appointment',
			'picture',
			'pawn',
			'pacifier',
			'note',
			'nappy',
			'museum',
			'moneybox',
			'kitchen',
			'jumper',
			'football2',
			'flying_stork_with_bundle',
			'dining_room',
			'cooking_pot',
			'coctail',
			'coat',
			'close_up_mode',
			'christmas_ice_skate',
			'christmas_hat',
			'christmas_gift',
			'christmas_candy_cane',
			'chicken',
			'champagne',
			'cd',
			'cat',
			'carrot',
			'car',
			'camping_tent',
			'cafe',
			'business',
			'bungalow',
			'bunch_ingredients',
			'brick',
			'bra',
			'bottle',
			'book_stack',
			'books',
			'bobbin',
			'birthday_cake',
			'bill',
			'bicycle',
			'bib',
			'berry',
			'beer_glass',
			'bed',
			'bath_room',
			'basketball',
			'baseball_cap',
			'barcode',
			'barbell',
			'bar',
			'ball_point_pen',
			'babyroom',
			'baby',
			'armchair',
			'alto_saxophone',
			'airport',
			'advertising',
		);

		$icons = array_combine($icons, $icons);
		natsort($icons);

		return $this->select_list($icons, $this->_category->icon);
	}
}