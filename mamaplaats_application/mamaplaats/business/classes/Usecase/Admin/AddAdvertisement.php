<?php

class Usecase_Admin_AddAdvertisement {

	/**
	 * @var Repository_Setting_Advertisement
	 */
	private $_repository_advertisement;

	/**
	 * @var Validate_Setting_Advertisement
	 */
	private $_validate_advertisement;

	public function __construct($repository_advertisement, $validate_advertisement)
	{
		$this->_repository_advertisement = $repository_advertisement;
		$this->_validate_advertisement = $validate_advertisement;
	}

	public function execute(Entity_Setting_Advertisement $advertisement)
	{
		$this->_validate_advertisement($advertisement);

		if ($this->_validate_unique_slug($advertisement->slug))
		{
			throw new Validate_Exception('email in use', array('Advertentie locatie bestaat reeds'));
		}

		$this->_repository_advertisement->create($advertisement);
	}

	private function _validate_advertisement(Entity_Setting_Advertisement $advertisement)
	{
		$this->_validate_advertisement->load($advertisement->as_array());
        $advertisement->description = $this->_santize_input($advertisement->description);
		$this->_validate_advertisement->default_rules();

		if ($this->_validate_advertisement->check() !== TRUE)
		{
			throw new Validate_Exception('This Advertisement is not Valid!', $this->_validate_advertisement->errors());
		}
	}

	public function _validate_unique_slug($slug)
	{
		$rules = array(array('slug', '=', $slug));
		$exists = $this->_repository_advertisement->load_object($rules);

		return ( ! empty($exists));
	}

    private function _santize_input($string) {
        $string = preg_replace("/<script.*?\/script>/s", "", $string)? : $string;
        $string = htmlentities($string, ENT_QUOTES, false);
        return $string;
    }
}