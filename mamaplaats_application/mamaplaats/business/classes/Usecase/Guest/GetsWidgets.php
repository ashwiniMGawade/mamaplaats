<?php

class Usecase_Guest_GetsWidgets {

	/**
	 * @var Widget_Factory
	 */
	private $_widget_factory;

	public function __construct($widget_factory)
	{
		$this->_widget_factory = $widget_factory;
	}

	public function execute(array $required_widgets)
	{
		return $this->_get_widgets($required_widgets);
	}

	private function _get_widgets(array $required_widgets)
	{
		$widgets = array();
		foreach ($required_widgets as $widget => $parameters)
		{
			if (method_exists($this->_widget_factory, $widget))
			{
				// Make sure the parameters is always an array
				if (empty($parameters))
				{
					$parameters = array();
				}

				$widgets[] = call_user_func_array(array($this->_widget_factory->$widget(), 'load'), $parameters);
			}
		}

		return $widgets;
	}
}
