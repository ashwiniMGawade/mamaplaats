<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task synchronizes the number of blogs written
 * for each user who has written a blog lately
 *
 * Available config options is:
 *
 * --period=-2 days
 */
class Task_Sync_NumberOfBlogsWrittenPerUser extends Minion_Task
{
	/**
	 * A set of config options that this task accepts
	 * @var array
	 */
	protected $_options = array(
		'period',
	);

	public function _execute(array $params)
	{
		Factory_Admin::sends_number_of_blogs_written_per_user()->execute($params['period']);
	}
}