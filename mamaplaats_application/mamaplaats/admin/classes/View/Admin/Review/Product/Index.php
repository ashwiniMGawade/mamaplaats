<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Review_Product_Index {

	use View_Helper_Select, View_Helper_Formatting, View_Helper_Message;

	private $_product;
	private $_reviews;
	private $_media;
	private $_categories;

	public function __construct($product_objects, array $categories, array $messages)
	{
		$this->_product 	= $product_objects['product'];
		$this->_reviews 	= $product_objects['reviews'];
		$this->_media 		= $product_objects['media'];

		$this->_categories 	= $categories;
		$this->messages 	= $messages;
	}

	public function categories($parent_id = 0, $level = 0)
	{
		$categories = array();
		foreach ($this->_categories as $category)
		{
			if ($category->parent_id == $parent_id)
			{
				$category->title = str_repeat('-- ', $level).$category->title;
				$category->selected = ($category->id == $this->_product->category_id);
				$categories[] = $category;

				$categories = array_merge($categories, $this->categories($category->term_id, $level + 1));
			}
		}

		return $categories;
	}

	public function statuses()
	{
		$statuses = array('invisible' => 'Onzichtbaar', 'coming' => 'Aanmelden', 'running' => 'Lopende', 'finished' => 'Afgeronde');
		return $this->select_list($statuses, $this->_product->status);
	}

	public function product()
	{
		return $this->_product;
	}

	public function product_sections()
	{
		return json_encode($this->_product->sections);
	}

	public function product_ratings()
	{
		return json_encode($this->_product->ratings);
	}

	public function product_remarks()
	{
		return json_encode($this->_product->remarks);
	}

	public function reviews()
	{
		return $this->_reviews;
	}

	public function approved_reviews()
	{
		$approved_reviews = array();
		foreach ($this->_reviews as $review)
		{
			if ( ! in_array($review['review']->status, array('approved', 'published')))
			{
				continue;
			}

			$approved_reviews[] = $review;
		}
		return $approved_reviews;
	}

	public function media_list()
	{
		$media_list = array();
		foreach ($this->_media as $media)
		{
			$media->sample = '/'.$media->path;
			if ($media->type == 'video')
			{
				$media->sample = $this->format_youtube_as_thumb($media->path);
			}

			$media->is_image 	= ($media->type == 'image');
			$media->is_video	= ($media->type == 'video');

			$media_list[] = $media;
		}

		usort($media_list, function ($a, $b) {
			return $a->title > $b->title;
		});

		return $media_list;
	}

	public function media_types()
	{
		return $this->select_list(array('image' => 'Afbeelding', 'video' => 'Video'));
	}

	public function selected_access_phone()
	{
		if( ! empty($this->_product->phone_access_field))
		{
			return true;
		}

		return false;
	}
}