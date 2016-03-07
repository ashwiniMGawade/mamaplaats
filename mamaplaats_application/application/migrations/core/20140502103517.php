<?php defined('SYSPATH') OR die('No direct script access.');

class Migration_Core_20140502103517 extends Minion_Migration_Base {

	use View_Helper_Review;

	/**
	 * Run queries needed to apply this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function up(Kohana_Database $db)
	{
		$repo_product = Factory_Repository::review_product();
		$review_products = $repo_product->load_set(array());
		foreach ($review_products as $product)
		{
			if ($product->application_end_date <= date('Y-m-d'))
			{
				$reviews = Factory_Repository::review()->load_set_with_users(array(
					array('review_product_id', '=', $product->id),
					array('status', 'IN', array('approved', 'published')),
				));

				$remarks = $this->_get_random_remarks($reviews);
				if ( ! empty($remarks))
				{
					$product = $repo_product->load_object(array(array('id', '=', $product->id)));
					$product->remarks = $remarks;
					$repo_product->update($product);
				}
			}
		}
	}

	/**
	 * Run queries needed to remove this migration
	 *
	 * @param Kohana_Database $db Database connection
	 */
	public function down(Kohana_Database $db)
	{
		// $db->query(NULL, 'DROP TABLE ... ');
	}

	private function _get_random_remarks($reviews)
	{
		// Merge All Remarks together
		$remarks = array();
		foreach ($reviews as $review)
		{
			$remarks = array_merge_recursive($remarks, $this->format_remarks($review['review']->remarks));
		}

		// Only continue if there are remarks else return empty
		if (empty($remarks['positive']) OR empty($remarks['negative']))
		{
			return array();
		}

		// Shuffle the remarks
		shuffle($remarks['positive']);
		shuffle($remarks['negative']);

		// Now get 5 positive remarks and 5 negative
		return array_merge(array_slice($remarks['positive'], 0, 5), array_slice($remarks['negative'], 0, 5));
	}
}
