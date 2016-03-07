<?php

trait View_Helper_Advertisements {

	public function get_advertisement_by_slug($slug)
	{
		$advertisement = Factory_Repository::advertisement()->load_object(array(array('slug', '=', $slug)));

		$advertisement_details = '';
		if( ! empty($advertisement))
		{
			$advertisement_details = array(
				'show_ad' => true,
				'text' => html_entity_decode($advertisement->description)
			);
		}
		return $advertisement_details;
	}

	public function header_advertisement()
	{
		return $this->get_advertisement_by_slug('header');
	}

	public function footer_advertisement()
	{
		return $this->get_advertisement_by_slug('footer');
	}

	public function footer_overview_pages_advertisement()
	{
		return $this->get_advertisement_by_slug('footer-overview-pages');
	}

	public function korting_sidebar_advertisement()
	{
		return $this->get_advertisement_by_slug('korting-sidebar');
	}

	public function blog_overview_sidebar_advertisement()
	{
		return $this->get_advertisement_by_slug('blog-overview-sidebar');
	}

	public function in_blog_sidebar_advertisement()
	{
		return $this->get_advertisement_by_slug('in-blog-sidebar');
	}

	public function in_blog_above_comments_advertisement()
	{
		return $this->get_advertisement_by_slug('in-blog-above-comments');
	}

	public function slide_in_banner_bottom_advertisement()
	{
		return $this->get_advertisement_by_slug('slide-in-banner-bottom');
	}
}