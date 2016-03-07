<?php

class View_Coupon_Shop_List {

	use View_Helper_ImagePath, View_Helper_PregnancyCalander;

	public $title = 'Alle Winkels';
	public $description = 'Vind kortingscodes en aanbiedingen voor mama en kind bij heel veel leuke winkels.';
	public $widgets;

	private $_coupon_shops;
	private $_popular_shops;
	private $_selected_character;
	private $_characters;

	public function __construct($coupon_shops, $popular_shops, $selected_character, $widgets)
	{
		$this->_coupon_shops 		= $coupon_shops;
		$this->_popular_shops 		= $popular_shops;
		$this->_selected_character 	= $selected_character;
		$this->_characters 			= array_merge(range('a', 'z'), array('0-9'));

		$this->widgets = $widgets;
	}

	public function characters()
	{
		$characters = array();
		foreach ($this->_characters as $character)
		{
			$characters[] = array('character' => $character, 'selected' => ($character === $this->_selected_character));
		}

		return $characters;
	}

	public function popular_shops()
	{
		$popular_shops = $this->_popular_shops;
		if ( ! empty($this->_selected_character))
		{
			$popular_shops = $this->_filter_shops_by_first_character($this->_popular_shops, $this->_selected_character);
		}

		$formatted_shops = array();
		foreach (array_slice($popular_shops, 0, 5) as $popular_shop)
		{
			$popular_shop->image = $this->get_image('coupon/shop/'.$popular_shop->id.'.jpg', 98, 88);
			$formatted_shops[] = $popular_shop;
		}

		return $formatted_shops;
	}

	public function coupon_shops()
	{
		if ( ! empty($this->_selected_character))
		{
			return array(
				array(
					'character' => $this->_selected_character,
					'selected' 	=> TRUE,
					'shops' 	=> $this->_filter_shops_by_first_character($this->_coupon_shops, $this->_selected_character),
				)
			);
		}
		else
		{
			return $this->_split_shops_per_character($this->_coupon_shops);
		}
	}

	private function _split_shops_per_character($shops)
	{
		$splitted_shops = array();
		foreach ($this->_characters as $character)
		{
			$splitted_shops[] = array(
				'character' => $character,
				'shops' 	=> $this->_filter_shops_by_first_character($shops, $character),
			);
		}

		return $splitted_shops;
	}

	private function _filter_shops_by_first_character($shops, $character)
	{
		$filtered_shops = array();
		foreach ($shops as $shop)
		{
			// Filter All Shops that don't begin with a digit
			if ($character === '0-9' AND ! is_numeric(substr($shop->name, 0, 1)))
			{
				continue;
			}

			// Filter all shops that don't begin with a letter
			if ($character !== '0-9' AND strtolower(substr($shop->name, 0, 1)) != $character)
			{
				continue;
			}

			$filtered_shops[] = $shop;
		}

		return $filtered_shops;
	}
}