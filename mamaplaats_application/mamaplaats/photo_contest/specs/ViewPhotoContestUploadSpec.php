<?php

class DescribeViewPhotoContestUpload extends \PHPSpec\Context
{
	public function itShouldReturnIfTheUserIsLoggedIn()
	{
		// If the user is Null it's false
		$user = $this->mock('Model_WP_User');
		$this->spec(new View_Photo_Contest_Upload($user))->logged_in()->should->be(FALSE);

		// If the id is set it should be true
		$user->ID = 1;
		$this->spec(new View_Photo_Contest_Upload($user))->logged_in()->should->be(TRUE);
	}
}