<?php

use Codeception\Util\Stub;

class DiscourseSsoTest extends \Codeception\TestCase\Test
{
	public function testThrowExceptionWhenSsoOrSignatureKeyIsMissing()
	{
		$this->setExpectedException('Exception', 'Invalid Authentication');

		$discourse_factory = $this->_create_discourse_factory_mock(false);

		$access_keys = array();
		$entity_user = new Entity_User;

		$sso_login = new Usecase_User_LoginDiscourseSso($discourse_factory);
		$sso_login->execute($entity_user, $access_keys);
	}

	public function testThrowExceptionWhenValidatePayloadReturnsFalse()
	{
		$this->setExpectedException('Exception', 'Forbidden, Bad SSO request');

		$discourse_factory = $this->_create_discourse_factory_mock(false);

		$payload = urlencode('bm9uY2U9ZTcyNWNlYjMwMWJjOGNmNjE2YWJmNmJhOWZlM2Q2ZWQmcmV0dXJu%0AX3Nzb191cmw9aHR0cCUzQSUyRiUyRmxvY2FsaG9zdCUzQTMwMDAlMkZzZXNz%0AaW9uJTJGc3NvX2xvZ2lu%0A');
		$signature = urlencode('b620b72d7e101d71a0e9cbeef076279a78f439646ee8d78dfda2d74f66197ea9');

		$access_keys = array(
			'sso' => $payload,
			'sig' => $signature
		);
		$entity_user = new Entity_User;

		$sso_login = new Usecase_User_LoginDiscourseSso($discourse_factory);
		$sso_login->execute($entity_user, $access_keys);
	}

	public function testMatchDiscourseSignInString()
	{
		$discourse_factory = $this->_create_discourse_factory_mock(true);

		$payload = urlencode('bm9uY2U9ZTcyNWNlYjMwMWJjOGNmNjE2YWJmNmJhOWZlM2Q2ZWQmcmV0dXJu%0AX3Nzb191cmw9aHR0cCUzQSUyRiUyRmxvY2FsaG9zdCUzQTMwMDAlMkZzZXNz%0AaW9uJTJGc3NvX2xvZ2lu%0A');
		$signature = urlencode('b620b72d7e101d71a0e9cbeef076279a78f439646ee8d78dfda2d74f66197ea9');
		$signInString = "signInString";


		$access_keys = array(
			'sso' => $payload,
			'sig' => $signature
		);
		$entity_user = new Entity_User;

		$sso_login = new Usecase_User_LoginDiscourseSso($discourse_factory);
		$return_value = $sso_login->execute($entity_user, $access_keys);

		$this->assertEquals($return_value, $signInString);
	}

	private function _create_discourse_factory_mock($validatePayload)
	{
		$discourse = $this->getMock('DiscourseSso');

		$discourse->expects($this->any())
			->method('setSecret')
			->will($this->returnValue(true));

		$discourse->expects($this->any())
			->method('validatePayload')
			->will($this->returnValue($validatePayload));

		$discourse->expects($this->any())
			->method('getNonce');

		$discourse->expects($this->any())
			->method('getSignInString')
			->will($this->returnValue("signInString"));

		return $discourse;
	}
}