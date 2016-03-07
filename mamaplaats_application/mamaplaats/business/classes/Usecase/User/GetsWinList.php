<?php

class Usecase_User_GetsWinList {

    /**
     * @var Repository_Win
     */
    private $_repository_win;

    /**
     * @var Repository_Comment
     */
    private $_repository_comment;

    public function __construct($repository_win, $repository_comment)
    {
        $this->_repository_win = $repository_win;
        $this->_repository_comment = $repository_comment;
    }

    public function execute(Entity_User $user, $list_type, $limit, $offset = 0)
    {

        // Don't load more than 200
        if ($limit > 200)
        {
            $limit = 200;
        }
        $subscribed_post_ids = array();

        $subscribed_comments = $this->_repository_comment->load_set(array(array('user_id', '=',  $user->id)));

        if (!empty($subscribed_comments)) {
            foreach ($subscribed_comments as $comment) {
                $subscribed_post_ids[] = $comment->post_id;
            }
        }

        if ($list_type == 'subscribed') {
            $open_win 	= $this->_repository_win->load_set_by_category_id(19, 20, (int) $offset, $subscribed_post_ids);
            $closed_win = $this->_repository_win->load_set_by_category_id(3161, (int) $limit, (int) $offset, $subscribed_post_ids);
        } else {
            $open_win 	= $this->_repository_win->load_set_by_category_id(19, 20, (int) $offset, array(),$subscribed_post_ids);
            $closed_win = $this->_repository_win->load_set_by_category_id(3161, (int) $limit, (int) $offset, array(), $subscribed_post_ids);
        }

        return array('open' => $open_win, 'closed' => $closed_win);
    }
}