<?php

use Codeception\Util\Stub;

class BrowserTest extends \Codeception\TestCase\Test {

	public function testReturnFalseWhenBrowserDataIsNotValid()
	{
		$brwoser = new Usecase_Guest_AddsBrowserInfo(
			NULL,
			$this->_create_validate_browser_mock(FALSE)
			);

		$result = $brwoser->execute(new Entity_Browser);
		$this->assertFalse($result, FALSE);
	}

	public function testSaveBrwoserDataWhenBrowserDataIsValid()
	{
		$browser = new Usecase_Guest_AddsBrowserInfo(
			$this->_create_browser_repository_mock(),
			$this->_create_validate_browser_mock(TRUE)
			);
		$browser->execute(new Entity_Browser);
	}

	private function _create_browser_repository_mock()
	{
		$repository_browser = $this->getMock('Repository_Browser');
		$repository_browser->expects($this->once())
			->method('create')
			->will($this->returnValue(new Entity_Browser));

		return $repository_browser;
	}

	private function _create_validate_browser_mock($is_valid)
	{
		$validate_browser = $this->getMock('Validate_Browser');

		$validate_browser->expects($this->once())
			->method('check')
			->will($this->returnValue($is_valid));

		return $validate_browser;
	}
}