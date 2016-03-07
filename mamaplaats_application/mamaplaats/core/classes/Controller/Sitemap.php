<?php

class Controller_Sitemap extends Controller_Base {

	public function before()
	{
		$this->auto_render = FALSE;
		parent::before();
	}

	public function action_blog()
	{
		$xml = $this->_init_sitemap();

		$blogs = Factory_Repository::blog()->load_set_advanced(array(array('blog.post_status', '=', 'publish')));
		foreach ($blogs as $blog)
		{
			$blog = $blog['blog'];
			$xml = $this->_add_url($xml, Route::url('Blog', array('slug' => $blog->slug)), $blog->modified);
		}

		$this->response->headers('Content-type', 'text/xml');
		$this->response->body($xml->asXML());
	}

	public function action_advise()
	{
		$xml = $this->_init_sitemap();

		$advises = Factory_Repository::advise()->load_set_advanced(array(array('advise.post_status', '=', 'publish')));
		foreach ($advises as $advise)
		{
			$advise = $advise['advise'];
			$xml = $this->_add_url($xml, Route::url('Advise', array('slug' => $advise->slug)), $advise->modified);
		}

		$this->response->headers('Content-type', 'text/xml');
		$this->response->body($xml->asXML());
	}

	public function action_win()
	{
		$xml = $this->_init_sitemap();

		$win = Factory_Repository::win()->load_set_advanced(array(array('win.post_status', '=', 'publish')));
		foreach ($win as $win_item)
		{
			$win_item = $win_item['win'];
			$xml = $this->_add_url($xml, Route::url('Win', array('slug' => $win_item->slug)), $win_item->modified);
		}

		$this->response->headers('Content-type', 'text/xml');
		$this->response->body($xml->asXML());
	}

	public function action_review_product()
	{
		$xml = $this->_init_sitemap();

		$review_products = Factory_Repository::review_product()->load_set_advanced(array(array('application_start_date', '<=', date('Y-m-d H:i:s'))));
		foreach ($review_products as $review_product)
		{
			$xml = $this->_add_url($xml, Route::url('review_product', array('slug' => $review_product->slug)), $review_product->modified);
		}

		$this->response->headers('Content-type', 'text/xml');
		$this->response->body($xml->asXML());
	}

	public function action_review()
	{
		$xml = $this->_init_sitemap();

		$reviews = Factory_Repository::review()->load_set_advanced(array(array('reviews.status', '=', 'published')));
		foreach ($reviews as $review)
		{
			$review = $review['review'];
			$xml = $this->_add_url($xml, Route::url('review', array('slug' => $review->slug)), $review->published);
		}

		$this->response->headers('Content-type', 'text/xml');
		$this->response->body($xml->asXML());
	}

	public function action_author()
	{
		$xml = $this->_init_sitemap();

		$users = Factory_Repository::user()->load_set(array(array('registration_date', '>', date('Y-m-d H:i:s', strtotime('-3 months')))));
		foreach ($users as $user)
		{
			$xml = $this->_add_url($xml, Route::url('Author_Index', array('slug' => $user->slug)), $user->registration_date);
		}

		$this->response->headers('Content-type', 'text/xml');
		$this->response->body($xml->asXML());
	}

	private function _init_sitemap()
	{
		$xml = new SimpleXMLElement("<?xml version='1.0' encoding='UTF-8' ?>\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
		$url = $xml->addChild('url');
		$url->addChild('loc', URL::base());
		$url->addChild('priority', '1.0');

		return $xml;
	}

	private function _add_url(SimpleXMLElement $xml, $url, $changed)
	{
		$child = $xml->addChild('url');
		$child->loc = $url;
		$child->addChild('lastmod', gmdate('c', strtotime($changed)));
		$child->addChild('changefreq', 'weekly');
		$child->addChild('priority', '0.5');

		return $xml;
	}
}