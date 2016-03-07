<?php

class Usecase_User_GetsAdminBlogList {

    /**
     * @var Repository_Blog
     */
    private $_repository_blog;
    private $_admin_user_id = 1;

    public function __construct($repository_blog)
    {
        $this->_repository_blog = $repository_blog;
    }

    public function execute($filters, $limit, $offset = 0)
    {
        // Don't load more than 200
        if ($limit > 200)
        {
            $limit = 200;
        }

        $add_filters = array();
        $add_filters[] = array('blog.post_author', '=', $this->_admin_user_id);
        if( ! empty($filters['post_status']))
        {
            $add_filters[] = array('blog.post_status', '=', $filters['post_status']);
        }

        return $this->_repository_blog->load_set_advanced(
            $add_filters,
            'blog.post_date', 'DESC', $limit, $offset
        );
    }
}