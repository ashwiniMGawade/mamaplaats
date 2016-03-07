<?php

class Controller_Photo_Contest_Sponsor extends Controller_WordPress {

	/**
	 * @var object The view
	 */
	protected $content;

	/**
	 * @var string The currently active menu item
	 */
	protected $_active_menu = NULL;

	/**
	 * This is the entry index page. The person can view a single entry that
	 * was submitted for the contest
	 *
	 * @throws HTTP_Exception_404
	 */
	public function action_index()
	{
		// Activate the sponsor menu item
		$this->_active_menu = 'Sponsors';

		$contest = new Model_Photo_Contest($this->request->param('contest_id'));

		// Build the view
		$content = new View_Photo_Contest_Sponsor_Index($contest);
		$this->_build_layout($content);
	}

	/**
	 * This is the active sponsors listing page here are the sponsors
	 * listed for the active photo contests
	 */
	public function action_list()
	{
		// Load the contests
		$active_contest = new Model_Photo_Contest;
		$active_contest->get_active();

		$next_contest = new Model_Photo_Contest;
		$next_contest->get_next();

		// Build the view
		$content = new View_Photo_Contest_Sponsor_List($active_contest, $next_contest);
		$this->_build_layout($content);
	}

	/**
	 * Build the contest layout
	 *
	 * @param string $content The content
	 * @param bool|Model_Photo_Contest $contest The contest object
	 * @param array $widgets The widgets to show
	 */
	protected function _build_layout($content, $contest = FALSE, $widgets = array())
	{
		$this->view = new View_Photo_Contest_Layout($content, $contest);

		if ($this->_active_menu !== NULL)
		{
			$this->view->activate_menu_item($this->_active_menu);
		}

		// Load the widgets
		foreach ($widgets as $widget)
		{
			// Add the ranking widget
			$class_name = 'View_Photo_Contest_Widget_'.$widget;
			$_widget = new $class_name($contest);
			$this->view->add_widget($_widget);
		}
	}
}