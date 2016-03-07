<?php

class Controller_Photo_Contest_Winner extends Controller_WordPress {

	/**
	 * @var object The view
	 */
	protected $content;

	/**
	 * @var string The currently active menu item
	 */
	protected $_active_menu = NULL;

	/**
	 * This is the active sponsors listing page here are the sponsors
	 * listed for the active photo contests
	 */
	public function action_list()
	{
		// Load the contests
		$contest = new Model_Photo_Contest;

		// Build the view
		$content = new View_Photo_Contest_Winner_List($contest);
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