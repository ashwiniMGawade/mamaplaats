<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task cleans up the denied reviews from the database
 * so it stays performing
 */
class Task_Review_CleanupDeniedReviews extends Minion_Task
{
	protected $_options = array();

	public function _execute(array $params)
	{
		Factory_Admin::cleans_up_denied_reviews()->execute();
	}
}