<?php

class DescribeModelPhotoContest extends \PHPSpec\Context
{
	/**
	 * @var Model_Photo_Contest
	 */
	protected $model;

	public function before()
	{
		$remote = Database::instance('spec');

		// Build the databases
		$this->_build_photo_contest_database($remote);
		$this->_build_photo_contest_entry_database($remote);

		$this->model = $this->spec(new Model_Photo_Contest(NULL, $remote));
	}

	public function itShouldReturnTheActiveContest()
	{
		$this->model->get_active()->as_array()->should->be(array(
			'id' => '1',
			'title' => 'Active Contest',
			'description' => 'Active Contest Description',
			'sponsor_photo' => 'http://test.com/image.png',
			'sponsor_title' => 'Sponsor 1',
			'sponsor_page' => 'Sponsor page',
			'terms' => 'terms',
			'active' => '1',
			'submit_date' => '2012-06-01',
			'start_date' => '2012-08-01',
			'end_date' => '2014-10-18',
		));
	}

	public function itShouldReturnTheNextContest()
	{
		$this->model->get_next()->as_array()->should->be(array(
			'id' => '2',
			'title' => 'Next Contest',
			'description' => 'Next Contest Description',
			'sponsor_photo' => 'http://test.com/image.png',
			'sponsor_title' => 'Sponsor 2',
			'sponsor_page' => 'Sponsor page',
			'terms' => 'terms',
			'active' => '0',
			'submit_date' => '2012-10-18',
			'start_date' => date('Y-m-d', strtotime('+10 days')),
			'end_date' => '2012-11-30',
		));
	}

	private function _build_photo_contest_database($remote)
	{
		$remote->query(Database::INSERT, "DROP TABLE IF EXISTS `photo_contests`;");

		$remote->query(Database::INSERT, "
			CREATE TABLE `photo_contests` (
			  id INTEGER PRIMARY KEY AUTOINCREMENT,
			  title varchar(200) NOT NULL,
			  description text NOT NULL,
			  sponsor_photo text NOT NULL,
			  sponsor_title varchar(200) NOT NULL,
			  sponsor_page text NOT NULL,
			  terms text NOT NULL,
			  active tinyint(1) NOT NULL DEFAULT '0',
			  submit_date date NOT NULL,
			  start_date date NOT NULL,
			  end_date date NOT NULL
			);
		");

		// Insert some test contest data
		$remote->query(Database::INSERT, "
			INSERT INTO photo_contests (id, title, description, sponsor_photo, sponsor_title, sponsor_page, terms, active, submit_date, start_date, end_date) VALUES
			(1, 'Active Contest', 'Active Contest Description', 'http://test.com/image.png', 'Sponsor 1', 'Sponsor page', 'terms', 1, '2012-06-01', '2012-08-01', '2014-10-18');
		");

		$remote->query(Database::INSERT, "
			INSERT INTO photo_contests (id, title, description, sponsor_photo, sponsor_title, sponsor_page, terms, active, submit_date, start_date, end_date) VALUES
			(2, 'Next Contest', 'Next Contest Description', 'http://test.com/image.png', 'Sponsor 2', 'Sponsor page', 'terms', 0, '2012-10-18', '".date('Y-m-d', strtotime('+10 days'))."', '2012-11-30');
		");
	}

	private function _build_photo_contest_entry_database($remote)
	{
		$remote->query(Database::INSERT, "DROP TABLE IF EXISTS `photo_contest_entries`;");

		$remote->query(Database::INSERT, "
			CREATE TABLE `photo_contest_entries` (
			  id INTEGER PRIMARY KEY AUTOINCREMENT,
			  photo_contest_id int(11),
			  wp_user_id int(11),
			  title varchar(200) NOT NULL,
			  description text NOT NULL,
			  photo_url text NOT NULL,
			  amount_votes int(11) DEFAULT 0 NOT NULL,
			  status text DEFAULT 'pending' NOT NULL,
			  last_vote datetime NOT NULL,
			  upload_date datetime NOT NULL
			);
		");

		// Insert some test contest data
		$remote->query(Database::INSERT, "
			INSERT INTO photo_contest_entries (id, photo_contest_id, wp_user_id, title, description, photo_url, amount_votes, status, last_vote, upload_date) VALUES
			(1, 1, 1, 'Test Photo 1', 'Test Photo 1 Description', 'http://test.com/image.png', 0, 'accepted', '2012-06-01', '2012-08-01');
		");

		$remote->query(Database::INSERT, "
			INSERT INTO photo_contest_entries (id, photo_contest_id, wp_user_id, title, description, photo_url, amount_votes, status, last_vote, upload_date) VALUES
			(2, 1, 1, 'Test Photo 2', 'Test Photo 2 Description', 'http://test.com/image.png', 0, 'accepted', '2012-06-01', '2012-08-01');
		");

		$remote->query(Database::INSERT, "
			INSERT INTO photo_contest_entries (id, photo_contest_id, wp_user_id, title, description, photo_url, amount_votes, status, last_vote, upload_date) VALUES
			(3, 1, 1, 'Test Photo 3', 'Test Photo 3 Description', 'http://test.com/image.png', 0, 'pending', '2012-06-01', '2012-08-01');
		");

		$remote->query(Database::INSERT, "
			INSERT INTO photo_contest_entries (id, photo_contest_id, wp_user_id, title, description, photo_url, amount_votes, status, last_vote, upload_date) VALUES
			(4, 1, 1, 'Test Photo 4', 'Test Photo 4 Description', 'http://test.com/image.png', 0, 'accepted', '2012-06-01', '2012-08-01');
		");
	}

}