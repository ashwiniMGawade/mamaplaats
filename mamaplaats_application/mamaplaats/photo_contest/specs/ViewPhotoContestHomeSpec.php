<?php

class DescribeViewPhotoContestHome extends \PHPSpec\Context
{
	/**
	 * @var View_Photo_Contest_Home
	 */
	protected $view;

	/**
	 * @var Model_Photo_Contest
	 */
	protected $contest1;

	/**
	 * @var Model_Photo_Contest
	 */
	protected $contest2;

	public function before()
	{
		$this->contest1 = new Model_Photo_Contest;
		$this->contest1->set_fields(array('id' => 1, 'title' => 'Test 1', 'description' => 'Test 1', 'sponsor_photo' => 'http://image.com/image.png', 'sponsor_title' => 'sponsor title', 'sponsor_page' => 'sponsor description', 'terms' => 'the terms', 'submit_date' => '2012-09-04 10:00:00', 'start_date' => '2012-09-04 10:00:00', 'end_date' => '2012-09-04 10:00:00'));
		$this->contest2 = new Model_Photo_Contest;
		$this->contest2->set_fields(array('id' => 2, 'title' => 'Test 2', 'description' => 'Test 2', 'sponsor_photo' => 'http://image.com/image.png', 'sponsor_title' => 'sponsor title', 'sponsor_page' => 'sponsor description', 'terms' => 'the terms', 'submit_date' => '2012-09-04 10:00:00', 'start_date' => '2012-09-04 10:00:00', 'end_date' => '2012-09-04 10:00:00'));

		$this->view = $this->spec(new View_Photo_Contest_Home($this->contest1, $this->contest2));
	}

	public function itShouldReturnTheActiveContest()
	{
		$this->view->active_contest()->should->be($this->contest1);
	}

	public function itShouldReturnTheNextContest()
	{
		$this->view->next_contest()->should->be($this->contest2);
	}

}