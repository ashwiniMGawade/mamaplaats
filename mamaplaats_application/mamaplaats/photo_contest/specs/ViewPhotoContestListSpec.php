<?php

class DescribeViewPhotoContestList extends \PHPSpec\Context
{
	/**
	 * @var View_Photo_Contest_List
	 */
	protected $view;

	public function before()
	{
		// Build the entries
		$entry1 = new Model_Photo_Contest_Entry;
		$entry1->set_fields(array('id' => 1, 'photo_contest_id' => 1, 'wp_user_id' => 1, 'title' => 'Test 1', 'description' => 'Test 1', 'photo_url' => 'http://image.com/image.png', 'amount_votes' => 100, 'status' => 'accepted', 'last_vote' => '2012-09-04 10:00:00', 'upload_date' => '2012-09-04 10:00:00'));
		$entry1->rank = 3;
		$entry2 = new Model_Photo_Contest_Entry;
		$entry2->set_fields(array('id' => 2, 'photo_contest_id' => 1, 'wp_user_id' => 1, 'title' => 'Test 2', 'description' => 'Test 2', 'photo_url' => 'http://image.com/image.png', 'amount_votes' => 200, 'status' => 'accepted', 'last_vote' => '2012-09-04 10:00:00', 'upload_date' => '2012-09-04 10:00:00'));
		$entry2->rank = 2;
		$entry3 = new Model_Photo_Contest_Entry;
		$entry3->set_fields(array('id' => 3, 'photo_contest_id' => 1, 'wp_user_id' => 1, 'title' => 'Test 3', 'description' => 'Test 3', 'photo_url' => 'http://image.com/image.png', 'amount_votes' => 300, 'status' => 'accepted', 'last_vote' => '2012-09-04 10:00:00', 'upload_date' => '2012-09-04 10:00:00'));
		$entry3->rank = 1;

		$mock = \Mockery::mock('Model_Photo_Contest')
			->shouldReceive('get_entries')
			->withAnyArgs()
			->andReturn(array($entry1, $entry2, $entry3))
			->shouldReceive('count_total_entries')
			->withAnyArgs()
			->andReturn(3)
			->getMock();

		//$user = \Mockery::mock('Model_WP_User');
		$user = new Model_WP_User;

		$this->view = $this->spec(new View_Photo_Contest_List($mock, $user, array('amount' => 18, 'order_by' => 'upload_date', 'page' => 1)));
	}

	public function itShouldReturnAPageAmountList()
	{
		$expected = array(
			array(
				'value' => 9,
				'text' => 'amount=9&order_by=upload_date&page=1',
				'selected' => false,
			),
			array(
				'value' => 18,
				'text' => 'amount=18&order_by=upload_date&page=1',
				'selected' => true,
			),
			array(
				'value' => 36,
				'text' => 'amount=36&order_by=upload_date&page=1',
				'selected' => false,
			),
			array(
				'value' => 72,
				'text' => 'amount=72&order_by=upload_date&page=1',
				'selected' => false,
			),
		);

		$this->view->page_amounts()->should->be($expected);
	}

	public function itShouldReturnAPageOrderList()
	{
		$expected = array(
			array(
				'value' => 'last_vote',
				'text' => 'Laatst Gestemd',
				'selected' => false,
			),
			array(
				'value' => 'amount_votes',
				'text' => 'Populairse Eerst',
				'selected' => false,
			),
			array(
				'value' => 'upload_date',
				'text' => 'Laatst Geplaatst',
				'selected' => true,
			),
		);

		$this->view->orders()->should->be($expected);
	}

	public function itShouldReturnAPageList()
	{
		$expected = array(
			array(
				'value' => 1,
				'text' => 1,
				'selected' => true,
			),
		);

		$this->view->pages()->should->be($expected);
	}

	public function itShouldReturnTheEntries()
	{
		$expected = array(
			array(
				'id' => 1,
				'photo_contest_id' => 1,
				'wp_user_id' => 1,
				'title' => 'Test 1',
				'description' => 'Test 1',
				'photo_url' => 'http://image.com/image.png',
				'amount_votes' => 100,
				'status' => 'accepted',
				'last_vote' => '2012-09-04 10:00:00',
				'upload_date' => '2012-09-04 10:00:00',
				'single_url' => URL::site('fotowedstrijd/bekijk/foto/1'),
				'share_text' => 'Deze foto vind ik echt leuk: Test 1',
				'username' => 'Mamaplaats',
				'rank' => 3,
				'voted' => false,
			),
			array(
				'id' => 2,
				'photo_contest_id' => 1,
				'wp_user_id' => 1,
				'title' => 'Test 2',
				'description' => 'Test 2',
				'photo_url' => 'http://image.com/image.png',
				'amount_votes' => 200,
				'status' => 'accepted',
				'last_vote' => '2012-09-04 10:00:00',
				'upload_date' => '2012-09-04 10:00:00',
				'single_url' => URL::site('fotowedstrijd/bekijk/foto/2'),
				'share_text' => 'Deze foto vind ik echt leuk: Test 2',
				'username' => 'Mamaplaats',
				'rank' => 2,
				'voted' => false,
			),
			array(
				'id' => 3,
				'photo_contest_id' => 1,
				'wp_user_id' => 1,
				'title' => 'Test 3',
				'description' => 'Test 3',
				'photo_url' => 'http://image.com/image.png',
				'amount_votes' => 300,
				'status' => 'accepted',
				'last_vote' => '2012-09-04 10:00:00',
				'upload_date' => '2012-09-04 10:00:00',
				'single_url' => URL::site('fotowedstrijd/bekijk/foto/3'),
				'share_text' => 'Deze foto vind ik echt leuk: Test 3',
				'username' => 'Mamaplaats',
				'rank' => 1,
				'voted' => false,
			),
		);

		$this->view->entries()->should->be($expected);
	}
}