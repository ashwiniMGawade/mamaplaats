<?php

class Usecase_User_GetsReviewList {

	/**
	 * @var Repository_Review_Product
	 */
	private $_repository_review_product;

	public function __construct($repository_review_product)
	{
		$this->_repository_review_product = $repository_review_product;
	}

	public function execute(Entity_User $user, $get_only_subscribed_products = false)
	{
		$now = date('Y-m-d H:i:s');

		$review_products = $this->_repository_review_product->load_set_for_user($user->id);

		$products = array();

		foreach ($review_products as $review_product)
		{
			$product = $review_product['review_product'];
			$review = $review_product['review'];
			
			// Only get the ones where you are registered
			if ($get_only_subscribed_products AND $review->user_id == $user->id ) {
				$products[] = array('product' => $product, 'review' => $review);

			} elseif(!$get_only_subscribed_products AND ($product->application_start_date <= $now AND $product->application_end_date >= $now) AND $review->user_id != $user->id)
			{
				// Only get the ones with open applications
				$products[] = array('product' => $product, 'review' => $review);
			}
		}

		return $products;
	}
}