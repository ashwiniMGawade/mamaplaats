<?php

class DescribeViewPhotoContestLayout extends \PHPSpec\Context
{
	/**
	 * @var View_Photo_Contest_Layout
	 */
	protected $view;

	public function before()
	{
		$mock = \Mockery::mock('View_Content')
			->shouldReceive('render')
			->andReturn('content')
		->getMock();

		$mock->title = 'title';

		$this->view = $this->spec(new View_Photo_Contest_Layout($mock, 'sponsor photo'));
	}

	public function itShouldReturnTheMenu()
	{
		$expected = array(
			array(
				'url' => 'http://www.mamaplaats.dev/fotowedstrijd',
				'text' => 'Home',
				'active' => false,
			),
			array(
				'url' => 'http://www.mamaplaats.dev/fotowedstrijd/bekijk',
				'text' => 'Stemmen',
				'active' => true,
			),
			array(
				'url' => 'http://www.mamaplaats.dev/fotowedstrijd/meedoen',
				'text' => 'Deelnemen',
				'active' => false,
			),
		);

		$this->view->activate_menu_item('Stemmen');
		$this->view->menu()->should->be($expected);
	}

	public function itShouldBePossibleToDeleteAMenuItem()
	{
		$expected = array(
			array(
				'url' => 'http://www.mamaplaats.dev/fotowedstrijd',
				'text' => 'Home',
				'active' => false,
			),
			array(
				'url' => 'http://www.mamaplaats.dev/fotowedstrijd/bekijk',
				'text' => 'Stemmen',
				'active' => true,
			),
		);

		$this->view->activate_menu_item('Stemmen');
		$this->view->delete_menu_item('Deelnemen');
		$this->view->menu()->should->be($expected);
	}

	public function itShouldBePossibleToAddAWidget()
	{
		$expected = array(
			array (
				'content' => 'Widget',
			),
		);

		$this->view->add_widget('Widget');
		$this->view->widgets->should->be($expected);
	}

}