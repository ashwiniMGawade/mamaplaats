<?php

class Usecase_Editor_ImportsAffiliate4youOffers {

	/**
	 * @var Api_Affiliate4you_OfferRss
	 */
	private $_offer_rss;

	/**
	 * @var Repository_Coupon_Shop
	 */
	private $_repository_shop;

	/**
	 * @var Repository_Coupon_Offer
	 */
	private $_repository_offer;

	public function __construct($offer_rss, $repository_shop, $repository_offer)
	{
		$this->_offer_rss = $offer_rss;
		$this->_repository_shop = $repository_shop;
		$this->_repository_offer = $repository_offer;
	}

	public function execute()
	{
		$imported_offers = array();
		foreach ($this->_offer_rss->get_all() as $offer)
		{
			// Only import Free and Actions
			if ( ! in_array($offer['offer']['type'], array('Actie', 'Gratis')))
			{
				continue;
			}

			// Only import for Existing shops
			$shop = $this->_repository_shop->load_object(array(array('external_id', '=', $offer['offer']['advertiser_id'])));
			if (empty($shop->id))
			{
				continue;
			}

			// Only import if the offer does not exist yet
			$current_offer = $this->_repository_offer->load_object(array(array('external_id', '=', $offer['guid'])));
			if ( ! empty($current_offer->id))
			{
				continue;
			}

			$imported_offers[] = $this->_insert_offer($shop->id, $offer);
		}

		return $imported_offers;
	}

	private function _insert_offer($shop_id, array $offer)
	{
		$entity_offer = new Entity_Coupon_Offer;
		$entity_offer->coupon_shop_id 		= $shop_id;
		$entity_offer->coupon_category_id 	= $this->_translate_offer_category($offer['offer']['category_id']);
		$entity_offer->title 				= $offer['offer']['title'];
		$entity_offer->description 			= html_entity_decode(strip_tags($offer['offer']['description']));
		$entity_offer->url 					= $offer['link'];
		$entity_offer->coupon_code 			= '';
		$entity_offer->start_date 			= date('Y-m-d', strtotime($offer['offer']['start_date']));
		$entity_offer->end_date 			= date('Y-m-d', strtotime($offer['offer']['end_date']));
		$entity_offer->external_id 			= $offer['guid'];
		$entity_offer->type					= ($offer['offer']['type'] == 'Gratis') ? 'free' : 'offer';
		$entity_offer->created				= date('Y-m-d H:i:s');
		$entity_offer->modified				= date('Y-m-d H:i:s');

		return $this->_repository_offer->create($entity_offer);
	}

	private function _translate_offer_category($external_category_id)
	{
		$external_categories =  array(
			0 	=> 18, // Algemeen
			1 	=> 11, // Autostoeltjes
			2 	=> 10, // Babykamer
			3 	=> 4, // Babykleding
			4 	=> 7, // Babyverzorging & Voeding
			5 	=> 17, // Boeken
			6 	=> 11, // Box
			7 	=> 11, // Buggy
			31	=> 4, // Dameskleding
			8 	=> 12, // Geboortekaarten
			32	=> 4, // Herenkleding
			9 	=> 10, // Inrichting & Decoratie
			10 	=> 10, // Kinderkamer
			11 	=> 4, // Kinderkleding
			19 	=> 12, // Kinderschoen & Slofjes
			12 	=> 11, // Kinderwagen
			13 	=> 11, // Kinderstoelen
			14 	=> 13, // Kraamcadeau
			15 	=> 1, // Onderweg
			16 	=> 4, // Positiekleding
			30	=> 14, // Sieraden
			17 	=> 13, // Speelgoed
			21 	=> 3, // Vakantie & Recreatie
			33 	=> 20, // Winacties
		);

		if (array_key_exists($external_category_id, $external_categories))
		{
			return $external_categories[$external_category_id];
		}

		// Return other category if we don't know
		return 18;
	}
}