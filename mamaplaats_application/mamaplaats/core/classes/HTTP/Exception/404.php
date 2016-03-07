<?php

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {

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
			// Check if we can't redirect the user to an alternative
			$alternative = $this->_search_for_alternative($this->request()->uri());
			if ($alternative !== FALSE)
			{
				return Response::factory()->headers('Location', $alternative)->status(301);
			}

			// Generate a nicer looking "Oops" page.
			$view = new View_HTTP_404;
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

	private function _search_for_alternative($uri)
	{
		$uri_parts 	= explode('/', $uri);
		$slug 		= end($uri_parts);

		$seo_redirect = Factory_Repository::seo_redirect()->load_object(array(
			array('from_url', '=', $uri),
		));

		if ( ! empty($seo_redirect))
		{
			return URL::site($seo_redirect->to_url);
		}

		$blog = Factory_Repository::blog()->load_object(array(
			array('slug', '=', $slug),
			array('status', '=', 'publish')
		));

		if ( ! empty($blog))
		{
			return Route::url('Blog', array('slug' => $blog->slug));
		}

		$advise = Factory_Repository::advise()->load_object(array(
			array('slug', '=', $slug),
			array('status', '=', 'publish'),
		));

		if ( ! empty($advise))
		{
			return Route::url('Advise', array('slug' => $advise->slug));
		}

		$win = Factory_Repository::win()->load_object(array(
			array('slug', '=', $slug),
			array('status', '=', 'publish')
		));

		if ( ! empty($win))
		{
			return Route::url('Win', array('slug' => $win->slug));
		}

		return FALSE;
	}
}