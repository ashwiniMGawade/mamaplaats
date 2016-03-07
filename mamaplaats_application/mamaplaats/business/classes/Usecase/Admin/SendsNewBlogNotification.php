<?php

class Usecase_Admin_SendsNewBlogNotification
{

    /**
     * @var Repository_Follower
     */
    private $_repository_follower;

    /**
     * @var Repository_Blog
     */
    private $_repository_blog;

    /**
     * @var Message
     */
    private $_message;

    public function __construct($repository_follower, $repository_blog, $message)
    {
        $this->_repository_follower = $repository_follower;
        $this->_repository_blog = $repository_blog;
        $this->_message = $message;
    }

    public function execute($time)
    {
        $recent_blogs = $this->_get_latest_blogs($time);

        if (empty($recent_blogs)) {
            return false;
        }

        foreach ($recent_blogs as $blog_id => $blog) {
            if ($blog['user']->email == 'info@mamaplaats.nl') {
                continue;
            }

            $followers = $this->_repository_follower->get_followers($blog['user']->id);

            if (!empty($followers)) {
                $this->_sends_new_blog_notification($followers, $blog['user'], $blog['blog']);
            }
        }

        return TRUE;
    }

    private function _sends_new_blog_notification($followers, $user, $blog)
    {
        foreach ($followers as $follower) {
            $this->_message->send(
                'SendBlogCreationNotification',
                array(
                    'blog' => $blog,
                    'user' => $user,
                    'follower_name' => ucwords($follower->display_name),
                    'subject' => ucwords($follower->display_name) . ', Nieuwe Blog Post',
                    'receiver' => $follower->email,
                    'sender' => 'info@mamaplaats.nl',
                )
            );
        }
    }

    private function _get_latest_blogs($time)
    {
        $blogs = $this->_repository_blog->load_set_advanced(array(
            array('blog.post_date', '>=', date('Y-m-d H:i:s', strtotime($time))),
            array('blog.post_status', '=', 'publish')
        ), 'blog.post_date', 'ASC');

        $blog_list = array();
        foreach ($blogs as $blog) {
            $blog_list[$blog['blog']->id] = $blog;
        }
        return $blog_list;
    }

}