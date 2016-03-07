<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task send an instant response to all users who have earlier commented on any blog
 */
class Task_Mail_SendInstantCommentResponse extends Minion_Task
{
	protected $_options = array(
		'time',
	);

	public function _execute(array $params)
	{
		Factory_Admin::sends_instant_comment_response()->execute($params['time']);
	}
}