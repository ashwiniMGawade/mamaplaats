<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Review_Apply {

	use View_Helper_Message, View_Helper_ImagePath;

	public $title = 'Inschrijven voor Product Review';

	private $_review_product;
	private $_review;
    private $_query;

	public function __construct($review_product, $review, $messages, $query)
	{
		$this->_review_product 	= $review_product;
		$this->_review 			= $review;
		$this->messages 		= $messages;
        $this->_query 		= $query;
	}

	public function register_success()
	{
		return ( ! empty($this->messages) AND $this->messages['type'] == 'success');
	}

	public function review_product()
	{
		$product = clone $this->_review_product;
		$product->image_url		= $this->get_image($product->image_url, 232);
		$product->description 	= $product->description;

		return $product;
	}

	public function review()
	{
		return $this->_review;
	}

	public function show_access_phone()
	{
		if( ! empty($this->_review_product->phone_access_field))
		{
			return true;
		}

		return false;
	}

    public function referrer()
    {
        return (!empty($this->_query['referrer']) and empty($this->_review));
    }
}