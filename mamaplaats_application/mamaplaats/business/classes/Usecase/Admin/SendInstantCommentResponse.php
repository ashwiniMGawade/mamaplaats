<?php

class Usecase_Admin_SendInstantCommentResponse
{

    /**
     * @var Repository_Comment
     */
    private $_repository_comment;

    /**
     * @var Repository_Blog
     */
    private $_repository_blog;

    /**
     * @var Repository_User
     */
    private $_repository_user;

    /**
     * @var Message
     */
    private $_message;

    public function __construct($repository_comment, $repository_blog, $repository_user, $message)
    {
        $this->_repository_comment = $repository_comment;
        $this->_repository_blog = $repository_blog;
        $this->_repository_user = $repository_user;
        $this->_message = $message;
    }

    public function execute($time)
    {
        $recent_blog_comments = $this->_get_latest_comments_aggregated_by_blog($time);

        if (empty($recent_blog_comments)) {
            return FALSE;
        }

        foreach ($recent_blog_comments as $blog_id => $blog_comments) {
            $blog = $this->_get_blog_and_author_details(array($blog_id));
            $blog_notify_email_list = $this->_get_blog_commentators_email_list($blog_id);
            if (empty($blog)) {
                continue;
            }
            $blog_notify_email_list[$blog[0]['user']->email] = $blog[0]['user']->email;

            foreach ($blog_comments as $comment) {
                $notify_email_list = $blog_notify_email_list;
                unset($notify_email_list[$comment->author_email]);
                $this->_send_mail_to_commentators($notify_email_list, $blog, $comment);
            }
        }
        return TRUE;
    }

    private function _send_mail_to_commentators($notify_email_list, $blog, $most_recent_blog_comment)
    {
        foreach ($notify_email_list as $email_id) {
            $comments = array();
            $isBlogOwner = false;

            if ($email_id == $blog[0]['user']->email) {
                $isBlogOwner = true;
            }
            $user = $this->_repository_user->load_object(array(array('email', '=', $email_id)));


            if (empty($user) or !isset($blog[0]) or (isset($user->comment_notification) and $user->comment_notification == 0)) {
                continue;
            }

            $most_recent_blog_comment->unsubscribe_params = $this->_generate_unsubscribe_url_params($user);

            $most_recent_blog_comment->blog_title = $blog[0]['blog']->title;
            $most_recent_blog_comment->blog_slug = $blog[0]['blog']->slug;
            $comments[] = $most_recent_blog_comment;

            $subject = ($isBlogOwner) ? $user->display_name.', er is gereageerd op jouw blog!' : $user->display_name.', er is gereageerd op een blog waar jij op hebt gereageerd!';

            $this->_message->send(
                'InstantCommentResponse',
                array(
                    'comments' => $comments,
                    'subject' => $subject,
                    'receiver' => $email_id,
                    'sender' => 'info@mamaplaats.nl',
                    'isBlogOwner' => $isBlogOwner,
                )
            );
        }
    }

    private function _get_blog_commentators_email_list($blog_id)
    {
        $notify_email_list = array();
        $comments = $this->_repository_comment->load_set(array(
            array('post_id', '=', $blog_id),
            array('approved', '=', 1),
        ), 'date', 'DESC');

        foreach ($comments as $comment) {
            $notify_email_list[$comment->author_email] = $comment->author_email;
        }

        return $notify_email_list;
    }

    private function _generate_unsubscribe_url_params($user)
    {
        $hash_key = hash('sha1', $user->id . $user->email);

        return 'type=comment&user_id=' . base64_encode($user->id) . '&key=' . $hash_key;
    }

    private function _get_latest_comments_aggregated_by_blog($time)
    {
        $comments = $this->_repository_comment->load_set_advanced(array(
            array('date', '>=', date('Y-m-d H:i:s', strtotime($time))),
            array('approved', '=', 1),
        ), 'date', 'ASC');

        $blog_comments = array();
        foreach ($comments as $comment) {
            $blog_comments[$comment->post_id][] = $comment;
        }

        return $blog_comments;
    }

    private function _get_blog_and_author_details(array $blog_id)
    {
        $blogs = $this->_repository_blog->load_set_advanced(array(array('blog.ID', 'IN', $blog_id)));

        return $blogs;
    }
}