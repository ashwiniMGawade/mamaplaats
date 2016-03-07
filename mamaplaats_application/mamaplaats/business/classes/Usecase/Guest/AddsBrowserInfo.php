<?php

class Usecase_Guest_AddsBrowserInfo {

	/**
	 * @var Repository_Browser
	 */
	private $_repository_brwoser;

	/**
	 * @var Validate_Browser
	 */
	private $_validate_browser;

	public function __construct($repository_brwoser, $validate_browser)
	{
		$this->_repository_brwoser = $repository_brwoser;
		$this->_validate_browser = $validate_browser;
	}

	public function execute(Entity_Browser $browser)
	{
		if ($this->_validate_browser($browser) !== TRUE)
		{
			return FALSE;
		}

		return $this->_repository_brwoser->create($browser);
	}

	private function _validate_browser(Entity_Browser $browser)
	{
		$this->_validate_browser->load($browser->as_array());
		$this->_validate_browser->default_rules();

		return $this->_validate_browser->check();
	}
}