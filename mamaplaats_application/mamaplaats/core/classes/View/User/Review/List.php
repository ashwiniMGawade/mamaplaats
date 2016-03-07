<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Review_List {

	use View_Helper_ImagePath;

	public $title = 'Review Producten';

	private $_review_products;

    private $_get_only_subscribed_list;

	public function __construct($review_products, $get_only_subscribed_list = false)
	{
		$this->_review_products = $review_products;
		$this->_get_only_subscribed_list = $get_only_subscribed_list;
	}

	public function review_products()
	{
		$review_products = array();
		foreach ($this->_review_products as $review_product)
		{
			$review = $review_product['review'];

			$product = $review_product['product'];
			$product->review_id		= $review->id;
			$product->image_url		= $this->get_image($product->image_url, 232);
			$product->description 	= substr(strip_tags($product->description), 0, 100).'...';
			$product->status_link 	= $this->_get_status_link($review, $product);

			$review_products[] = $product;
		}

		return $review_products;
	}

    public function get_records_not_found_message() {
        if ($this->_get_only_subscribed_list) {
            return "Je bent nog niet inschreven voor een testpanel.";
        } else {
            return "Er zijn op dit moment geen testpanels waar je je voor in kunt schrijven.";
        }
    }

	private function _get_status_link(Entity_Review $review, Entity_Review_Product $product)
	{	
		$statuses = array(
			'' => array(
				'tag' => 'Inschrijven',
				'url' => '/user/review-product/'.$product->id.'/apply',
			),
			'waiting' => array(
				'tag' => 'Ingeschreven',
				'url' => '',
			),
			'denied' => array(
				'tag' => 'Ingeschreven',
				'url' => '',
			),
			'approved' => array(
				'tag' => 'Schrijf Review',
				'url' => '/user/review/'.$review->id,
			),
			'published' => array(
				'tag' => 'Review Live',
				'url' => '/review/'.$review->slug,
			),
		);

		return $statuses[$review->status];
	}
}