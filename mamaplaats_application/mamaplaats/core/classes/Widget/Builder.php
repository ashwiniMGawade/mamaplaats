<?php

class Widget_Builder {

	private $_widgets = array();
	private $_data;
	private $_renderer;

	public function __construct(array $widgets, $data, $renderer)
	{
		$this->_widgets = $widgets;
		$this->_data = $data;
		$this->_renderer = $renderer;
	}

	public function render()
	{
		$rendered = '';
		foreach ($this->_widgets as $widget_name => $widget_settings)
		{
			$rendered .= $this->_render_single($widget_name, $widget_settings);
		}

		return $rendered;
	}

	public function return_data()
	{
		$widgets = array();
		foreach ($this->_widgets as $widget_name => $widget_settings)
		{
			$widget_data = $this->_load_widget_data($widget_name, $widget_settings);

			$widget_view_name = 'View_Widget_'.$widget_name;
			$widgets[$widget_name] = new $widget_view_name($widget_data);
		}

		return $widgets;
	}

	private function _render_single($widget_name, $widget_settings)
	{
		$widget_data = $this->_load_widget_data($widget_name, $widget_settings);

		$widget_view_name = 'View_Widget_'.$widget_name;
		$widget_view_class = new $widget_view_name($widget_data);

		return $this->_renderer->render($widget_view_class);
	}

	private function _load_widget_data($widget_name, $settings)
	{
		if ( ! method_exists($this->_data, $widget_name))
		{
			throw new Exception('Widget data class not found');
		}

		// Make sure the parameters is always an array
		if (empty($settings))
		{
			$settings = array();
		}

		return call_user_func_array(array($this->_data->$widget_name(), 'load'), $settings);
	}
}