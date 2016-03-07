<?php

use Codeception\Util\Stub;

class AdvertisementsTest extends \Codeception\TestCase\Test
{
	public function testUpdateAdvertisementWhenPostedFieldsPassesAllValidations()
	{
		$advertisement = new Entity_Setting_Advertisement;
		$advertisement_repository = $this->_update_advertisement_repository_mock($advertisement);

		$validate_advertisement = new Validate_Setting_Advertisement;

		$advertisement->slug = 'header';
		$advertisement->name = 'header';
		$advertisement->description = 'header ad tag';
		$advertisement->status = '1';

		$update_advertisement = new Usecase_Admin_UpdateAdvertisement(
			$advertisement_repository,
			$validate_advertisement
		);

		$update_advertisement->execute($advertisement);
	}

	public function testAddAdvertisementWhenPostedFieldsPassesAllValidations()
	{
		$advertisement = new Entity_Setting_Advertisement;
		$advertisement_repository = $this->_create_advertisement_repository_mock($advertisement);

		$validate_advertisement = new Validate_Setting_Advertisement;

		$advertisement->slug = 'header';
		$advertisement->name = 'header';
		$advertisement->description = 'header ad tag';
		$advertisement->status = '1';

		$add_advertisement = new Usecase_Admin_AddAdvertisement(
			$advertisement_repository,
			$validate_advertisement
		);

		$add_advertisement->execute($advertisement);
	}

	private function _update_advertisement_repository_mock($advertisement)
	{
		$advertisement_repository = $this->getMock('Repository_Setting_Advertisement');

		$advertisement_repository->expects($this->once())
			->method('update')
			->will($this->returnValue($advertisement));

		return $advertisement_repository;
	}

	private function _create_advertisement_repository_mock($advertisement)
	{
		$advertisement_repository = $this->getMock('Repository_Setting_Advertisement');

		$advertisement_repository->expects($this->once())
			->method('create')
			->will($this->returnValue($advertisement));

		return $advertisement_repository;
	}
}