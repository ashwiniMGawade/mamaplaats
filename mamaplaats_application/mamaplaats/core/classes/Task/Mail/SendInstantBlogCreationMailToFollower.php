<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This task sends an instant notification to all of the blog creator's followers.
 *
 * Available config options are:
 *
 * --time=-10 minutes
 *
 *  This is the time in which new blog is created
 *
 */

class Task_Mail_SendInstantBlogCreationMailToFollower extends Minion_Task
{
    protected $_options = array(
        'time',
    );

    public function _execute(array $params)
    {
        Factory_Admin::sends_new_blog_notification()->execute($params['time']);
    }
}