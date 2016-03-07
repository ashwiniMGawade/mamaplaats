<?php defined('SYSPATH') or die('No direct script access.');

class View_Review_Product_Single {

	use View_Helper_Review, View_Helper_ImagePath, View_Helper_Formatting, View_Helper_Time, View_Helper_Advertisements, View_Helper_Device;

	private $_product;
	public $widgets;
	public $script_urls_array;

	public function __construct($product, $widgets, $script_urls_array)
	{
		$product = $this->_format_product_info($product);

		$this->title = ( ! empty($product['product']->meta_title))
			? $product['product']->meta_title
			: $product['product']->title;

		$this->description = ( ! empty($product['product']->meta_description))
			? $product['product']->meta_description
			: substr(strip_tags($product['product']->description), 0, 170);

		$this->image = URL::site($product['product']->image_url, TRUE);

		$this->_product = $product;
		$this->widgets = $widgets;
		$this->script_urls_array = $script_urls_array;
	}

    public function show_script()
    {
        if(in_array(trim($this->_product['product']->slug), $this->script_urls_array)) {
            return true;
        }
        return false;
    }

	public function user()
	{
		return $this->_product['user'];
	}

	public function product()
	{
		$product = clone $this->_product['product'];
		$product->created_formatted = strftime('%A %e %B %Y', strtotime($product->created));

		return $product;
	}

	public function count_days()
	{
		$difference = abs(time() - strtotime($this->_product['product']->application_end_date));
		return floor($difference / (60*60*24));
	}

	public function average_score()
	{
		if (empty($this->_product['reviews']))
		{
			return '';
		}

		$scores = array();
		foreach ($this->_product['reviews'] as $review)
		{
			if ($review['review']->rating_overal == 0)
			{
				continue;
			}

			$scores[] = $review['review']->rating_overal;
		}

		return number_format(array_sum($scores) / count($scores), 1);
	}

	public function conclusion()
	{
		$conclusion = $this->_product['product']->conclusion;
		$remarks = $this->_product['product']->remarks;

		if (empty($remarks))
		{
			return array();
		}

		return array('general_conclusion' => $conclusion, 'remarks' => $this->format_remarks($remarks));
	}

	public function review()
	{
		$reviews = array();
		foreach ($this->_product['reviews'] as $review)
		{
			$review['user']->avatar = $this->get_image_path(
				'avatar',
				$review['user']->id,
				228,
				213,
				$review['user']->profile_image_ext
			);
			$review['user']->registration_date_formatted = strftime('%A, %e %b \'%y', strtotime($review['user']->registration_date));
			$review['review']->information = substr(trim(strip_tags($review['review']->information)), 0, 50).'...';

			$reviews['reviews'][] = $review;
		}

		return $reviews;
	}

	public function media()
	{
		$image_count = 0;
		$video_count = 0;

		$media = array();
		foreach ($this->_product['media'] as $media_item)
		{
			if ($media_item->type == 'video')
			{
				if ($video_count >= 5)
				{
					continue;
				}

				$media_item->embed = $this->format_youtube_as_embed($media_item->path);
				$media_item->thumb = $this->format_youtube_as_thumb($media_item->path);
				$media['video'][] = $media_item;
				$media['has_videos'] = TRUE;

				if (empty($media['first_video']))
				{
					$media['first_video'] = $media_item;
				}

				$video_count++;
			}
			else
			{
				if ($image_count >= 5)
				{
					continue;
				}

				$media_item->thumb = $this->get_image($media_item->path, 134, 126);
				$media_item->path = $this->get_image($media_item->path, 740, 'n', FALSE);
				$media['image'][] = $media_item;
				$media['has_images'] = TRUE;

				$image_count++;
			}
		}

		return $media;
	}

	public function related()
	{
		$related = array();
		foreach ($this->_product['related'] as $product)
		{
			$product->image_url = $this->get_image($product->image_url, 228, 213);
			$product->description = substr(trim(strip_tags($product->description)), 0, 50).'...';

			$related[] = $product;
		}

		return $related;
	}

	private function _format_product_info($product)
	{
		$product['product']->image_url = $this->get_image($product['product']->image_url, 740, 'n', FALSE);
		$product['product']->is_coming = ($product['product']->status == 'coming');
		$product['product']->is_running = ($product['product']->status == 'running');
		$product['product']->is_published = ($product['product']->status == 'finished');
		$product['product']->is_pub_run = ($product['product']->status == 'running' OR $product['product']->status == 'finished');

		return $product;
	}
}