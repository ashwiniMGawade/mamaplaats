<?php

use Codeception\Util\Stub;

class AdvertisementPopupTest extends \Codeception\TestCase\Test
{
	public function testUpdateAdvertisementWhenPostedFieldsPassesAllValidations()
	{
		$advertisement_popup = new Entity_Setting_AdvertisementPopup;
		$advertisement_popup_repository = $this->_update_advertisement_popup_repository_mock($advertisement_popup);

		$validate_advertisement = new Validate_Setting_AdvertisementPopup;

		$advertisement_popup->image = 'advertisement.png';
		$advertisement_popup->url = 'http://www.mamaplaats.nl';
		$advertisement_popup->start_date = '2015-01-01';
		$advertisement_popup->end_date = '2015-01-02';
		$advertisement_popup->status = 'On';

		$update_advertisement = new Usecase_Admin_UpdateAdvertisementPopup(
			$advertisement_popup_repository,
			$validate_advertisement
		);

		$update_advertisement->execute($advertisement_popup);
	}

	public function testAddAdvertisementWhenPostedFieldsPassesAllValidations()
	{
		$advertisement_popup = new Entity_Setting_AdvertisementPopup;
		$advertisement_popup_repository = $this->_create_advertisement_popup_repository_mock($advertisement_popup);

		$validate_advertisement = new Validate_Setting_AdvertisementPopup;

		$advertisement_popup->image = 'advertisement.png';
		$advertisement_popup->url = 'http://www.mamaplaats.nl';
		$advertisement_popup->start_date = '2015-01-01';
		$advertisement_popup->end_date = '2015-01-02';
		$advertisement_popup->status = 'On';

		$add_advertisement = new Usecase_Admin_AddAdvertisementPopup(
			$advertisement_popup_repository,
			$validate_advertisement
		);

		$add_advertisement->execute($advertisement_popup);
	}

	public function testThrowsValidateExceptionWhenStartDateIsGreaterThanEndDate()
	{
		$this->setExpectedException('Validate_Exception', 'Invalid date range');

		$advertisement_popup = new Entity_Setting_AdvertisementPopup;
		$advertisement_popup_repository = $this->_advertisement_popup_repository_mock($advertisement_popup);

		$validate_advertisement = new Validate_Setting_AdvertisementPopup;

		$update_user_profile = new Usecase_Admin_UpdateAdvertisementPopup(
			$advertisement_popup_repository,
			$validate_advertisement
		);

		$advertisement_popup->image = 'advertisement.png';
		$advertisement_popup->url = 'http://www.mamaplaats.nl';
		$advertisement_popup->start_date = '2015-01-02';
		$advertisement_popup->end_date = '2015-01-01';
		$advertisement_popup->status = 'On';

		$update_user_profile->execute($advertisement_popup);
	}

	public function testGetsAdvertisementPopUpObjectFromSlug()
	{
		$advertisement_popup = new Entity_Setting_AdvertisementPopup;
		$advertisement_popup_repository = $this->_get_advertisement_popup_repository_mock($advertisement_popup);

		$get_advertisement = new Usecase_Admin_GetsAdvertisementPopup(
			$advertisement_popup_repository
		);

		$get_advertisement->execute('advertisement-pop');
	}

	private function _advertisement_popup_repository_mock($advertisement_popup)
	{
		$advertisement_popup_repository = $this->getMock('Repository_Setting_AdvertisementPopup');

		return $advertisement_popup_repository;
	}

	private function _update_advertisement_popup_repository_mock($advertisement_popup)
	{
		$advertisement_popup_repository = $this->getMock('Repository_Setting_AdvertisementPopup');

		$advertisement_popup_repository->expects($this->once())
			->method('update')
			->will($this->returnValue($advertisement_popup));

		return $advertisement_popup_repository;
	}

	private function _create_advertisement_popup_repository_mock($advertisement_popup)
	{
		$advertisement_popup_repository = $this->getMock('Repository_Setting_AdvertisementPopup');

		$advertisement_popup_repository->expects($this->once())
			->method('create')
			->will($this->returnValue($advertisement_popup));

		return $advertisement_popup_repository;
	}

	private function _get_advertisement_popup_repository_mock($advertisement_popup)
	{
		$advertisement_popup_repository = $this->getMock('Repository_Setting_AdvertisementPopup');

		$advertisement_popup_repository->expects($this->once())
			->method('load_object')
			->will($this->returnValue($advertisement_popup));

		return $advertisement_popup_repository;
	}
}