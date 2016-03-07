<?php

class Usecase_Admin_UpdateAdvertisementPopup {

	/**
	 * @var Repository_Setting_AdvertisementPopup
	 */
	private $_repository_advertisement_popup;

	/**
	 * @var Validate_Setting_AdvertisementPopup
	 */
	private $_validate_advertisement;

	public function __construct($repository_advertisement_popup, $validate_advertisement)
	{
		$this->_repository_advertisement_popup = $repository_advertisement_popup;
		$this->_validate_advertisement = $validate_advertisement;
	}

	public function execute(Entity_Setting_AdvertisementPopup $advertisement)
	{
		$this->_validate_advertisement($advertisement);

		if ($this->_validate_advertisement->compare_date_range($advertisement->start_date, $advertisement->end_date)==false)
		{
			throw new Validate_Exception('Invalid date range', array('End date date must be greater than or equal to start date.'));
		}

		$this->_repository_advertisement_popup->update($advertisement);
	}

	private function _validate_advertisement(Entity_Setting_AdvertisementPopup $advertisement)
	{
		$this->_validate_advertisement->load($advertisement->as_array());
		$this->_validate_advertisement->default_rules();

		if ($this->_validate_advertisement->check() !== TRUE)
		{
			throw new Validate_Exception('This Advertisement is not Valid!', $this->_validate_advertisement->errors());
		}
	}
}