<?php

class View_Home {

	use View_Helper_Item, View_Helper_Sorting, View_Helper_ImagePath, View_Helper_PregnancyCalander, View_Helper_Advertisements;

	public $title = 'Mamaplaats voor en door moeders';
	public $description = 'Mamaplaats is de blog site door en voor moeders.	Hier vind je alles over zwanger, baby, kind en mama. Meld je nu aan en maak kans op fantastische prijzen!';
	public $featured_section = '';

	private $_articles = array();
	private $_review_products = array();
	private $_wins = array();

	private $_widgets = array();

	private $_static_positions = array(
		3	=> 'most_viewed_blogs',
		// 3	=> 'advertorial_one',
		4	=> 'active_authors',
		// 5	=> 'adfab',
		7 	=> 'win',
		8	=> 'newsletter',
		10 	=> 'review_product',
		12	=> 'latest_comments',
		// 14	=> 'advertorial',
		17 	=> 'review_product',
		18 	=> 'win',
		// 5	=> 'facebook like',
	);

	public function __construct($items, $widgets, $featured_section)
	{
		// Add reviews and Win to their own container
		foreach ($items as $i => $item)
		{
			if ($item['type'] == 'review_product')
			{
				$this->_review_products[] = $item;
				unset($items[$i]);
			}

			if ($item['type'] == 'win')
			{
				$this->_wins[] = $item;
				unset($items[$i]);
			}

		}

		$this->_articles = $this->sort_by_array_field($items, 'date', 'desc');
		$this->_widgets = $widgets;
		$this->featured_section = $featured_section;
	}

	public function article_list()
	{
		$results = array();
		for ($count=0; $count<30; $count++)
		{
			if (array_key_exists($count, $this->_static_positions))
			{
				$static_name = $this->_static_positions[$count];
				if (in_array($static_name, array('review_product', 'win')))
				{
					$static = $this->_insert_static($static_name);
				}
				else
				{
					$static = $this->_insert_widget($static_name);
				}

				if ( ! empty($static))
				{
					$results[] = $static;
				}
			}
			else
			{
				$article 	= array_shift($this->_articles);
				$method 	= '_format_'.$article['type'];

				if (method_exists($this, $method))
				{
					$results[] = array('is_'.$article['type'] => $this->{$method}($article['object']));
				}
			}
		}

		return $results;
	}

	private function _insert_static($static_type)
	{
		$static	= array_shift($this->{'_'.$static_type.'s'});
		if (empty($static))
		{
			return array();
		}

		return array('is_'.$static_type => $this->{'_format_'.$static_type}($static['object']));
	}

	private function _insert_widget($static_type)
	{
		$widget_classes = array(
			'most_viewed_blogs' => 'MostViewedBlogs',
			'active_authors' => 'ActiveAuthors',
			'latest_comments' => 'LatestComments',
		);

		if (array_key_exists($static_type, $widget_classes))
		{
			$widget_class = $widget_classes[$static_type];
			$widget = array('is_'.$static_type => $this->_widgets[$widget_class]);
		}

		// if the widget was not in the widget array it won't need object data
		if (empty($widget))
		{
			$widget = array('is_'.$static_type => array($static_type => TRUE));
		}

		return $widget;
	}

	private function _format_blog($blog)
	{
		$blog['media']->path = $this->get_image_legacy($blog['media']->path, 260);
		$blog['blog']->excerpt = $blog['blog']->get_excerpt(140).'...';
		$blog['blog']->created_formatted = strftime('%e %B %G', strtotime($blog['blog']->created));

		return $blog;
	}

	private function _format_advise($advise)
	{
		$advise['media']->path = $this->get_image_legacy($advise['media']->path, 260);
		$advise['advise']->excerpt = $advise['advise']->get_excerpt(140).'...';
		$advise['advise']->created_formatted = strftime('%e %B %G', strtotime($advise['advise']->created));

		return $advise;
	}

	private function _format_review_product($review)
	{
		$review['review_product']->average_rating = number_format($review['review_product']->average_rating, 1);
		$review['review_product']->image_url = $this->get_image($review['review_product']->image_url, 260);
		$review['review_product']->description = substr(strip_tags($review['review_product']->description), 0, 140).'...';

		return $review;
	}

	private function _format_win($win)
	{
		$win['media']->path = $this->get_image_legacy($win['media']->path, 260);

		return $win;
	}
}
