<?php

class HTTP_Exception extends Kohana_HTTP_Exception {

	public function get_response()
	{
		// Lets log the Exception, Just in case it's important!
		Kohana_Exception::log($this);

		if (Kohana::$environment >= Kohana::DEVELOPMENT)
		{
			// Show the normal Kohana error page.
			return parent::get_response();
		}
		else
		{
			// Generate a nicer looking "Oops" page.
			$view = new View_HTTP_500;
			$view->header = $this->_render_header();
			$view->footer = $this->_render_footer();
			$view->version = trim(file_get_contents('VERSION'));
			$view->options = Kohana::$config->load('settings');
			$view->message = $this->getMessage();

			$renderer = Kostache_Layout::factory();
			$response = Response::factory()->status($this->getCode())->body($renderer->render($view));

			return $response;
		}
	}

	private function _render_header()
	{
		$menu_items = Kohana::$config->load('core_config')->get('header_menu');
		return Kostache::factory()->render(new View_Header(array(), $menu_items, '', array()));
	}

	private function _render_footer()
	{
		$core_config = Kohana::$config->load('core_config');
		$menu_items = $core_config->get('footer_menu');
		$partners = $core_config->get('partners');

		return Kostache::factory()->render(new View_Footer($menu_items, $partners, Request::current()));
	}
}