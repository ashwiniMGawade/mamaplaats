<?php

class Api_Affiliate4you_OfferRss {

	private $_rss_url;

	public function __construct($rss_url)
	{
		$this->_rss_url = $rss_url;
	}

	public function get_all()
	{
		$offer_rss = simplexml_load_file($this->_rss_url, NULL, LIBXML_NOCDATA);
		$namespaces = $offer_rss->getNameSpaces(TRUE);

		$offers = array();
		foreach ($offer_rss->channel->item as $offer)
		{
			$fields = (array) $offer;
			$fields['offer'] = (array) $offer->children($namespaces['offer']);

			$offers[] = $fields;
		}

		return $offers;
	}
}