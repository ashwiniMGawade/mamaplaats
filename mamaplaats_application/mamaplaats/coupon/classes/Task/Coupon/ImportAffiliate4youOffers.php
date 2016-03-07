<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task send a daily collection of comments made on
 * their blogs to the authors
 */
class Task_Coupon_ImportAffiliate4youOffers extends Minion_Task
{
	protected $_options = array();

	public function _execute(array $params)
	{
		Factory_Editor::imports_affiliate4you_offers()->execute();
	}
}