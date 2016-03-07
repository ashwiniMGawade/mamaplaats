<?php

class Usecase_Admin_GetsAdvertisementPopup {

	/**
	 * @var Repository_Setting_AdvertisementPopup
	 */
	private $_repository_advertisement_popup;

	public function __construct($repository_advertisement_popup)
	{
		$this->_repository_advertisement_popup = $repository_advertisement_popup;
	}

	public function execute($slug)
	{
		$advertisement = $this->_repository_advertisement_popup->load_object(array(array('slug', '=', $slug)));

		if (empty($advertisement))
		{
			return new Entity_Setting_AdvertisementPopup;
		}

		return $advertisement;
	}
}