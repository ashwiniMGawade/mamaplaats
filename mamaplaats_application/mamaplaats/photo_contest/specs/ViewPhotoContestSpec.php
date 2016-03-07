<?php

class DescribeViewPhotoContest extends \PHPSpec\Context
{
	public function before()
	{
		$this->view = $this->spec(new View_Photo_Contest());
	}

	public function itShouldReturnABasepath()
	{
		$this->view->basepath()->should->be(URL::base());
	}

	public function itShouldFormatErrorsCorrectly()
	{
		// Set the errors
		$this->view->set_errors(array(
			'test error 1',
			'test error 2',
		));

		// What the errors should look like
		$expected_errors = array(
			'messages' => array(
				array('error' => 'test error 1'),
				array('error' => 'test error 2'),
			),
		);

		$this->view->errors()->should->be($expected_errors);
	}
}