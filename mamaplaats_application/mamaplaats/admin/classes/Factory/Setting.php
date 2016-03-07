<?php

class Factory_Setting
{
	public static function add_advertisement_popup()
	{
		return new Usecase_Admin_AddAdvertisementPopup(
			Factory_Repository::advertisement_popup(),
			new Validate_Setting_AdvertisementPopup
		);
	}

	public static function gets_advertisement_popup()
	{
		return new Usecase_Admin_GetsAdvertisementPopup(
			Factory_Repository::advertisement_popup()
		);
	}

	public static function update_advertisement_popup()
	{
		return new Usecase_Admin_UpdateAdvertisementPopup(
			Factory_Repository::advertisement_popup(),
			new Validate_Setting_AdvertisementPopup
		);
	}

	public static function add_advertisement()
	{
		return new Usecase_Admin_AddAdvertisement(
			Factory_Repository::advertisement(),
			new Validate_Setting_Advertisement
		);
	}

	public static function update_advertisement()
	{
		return new Usecase_Admin_UpdateAdvertisement(
			Factory_Repository::advertisement(),
			new Validate_Setting_Advertisement
		);
	}
}