<?php

class DescribeViewPhotoContestTerms extends \PHPSpec\Context
{
	public function itShouldReturnPhotoContest()
	{
		$contest = $this->mock('Model_Photo_Contest');
		$this->spec(new View_Photo_Contest_Terms($contest))->contest()->should->be($contest);
	}
}