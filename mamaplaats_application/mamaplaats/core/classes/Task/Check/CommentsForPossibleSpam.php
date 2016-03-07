<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task send a daily collection of comments made on
 * their blogs to the authors
 */
class Task_Check_CommentsForPossibleSpam extends Minion_Task
{
	protected $_options = array();

	public function _execute(array $params)
	{
		Factory_Admin::checks_comments_for_possible_spam()->execute();
	}
}