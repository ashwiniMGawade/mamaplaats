<?php

class Usecase_User_GetsOwnBlog
{

    /**
     * @var Repository_Blog
     */
    private $_repository_blog;

    /**
     * @var Repository_Legacy_Media
     */
    private $_repository_media;

    /**
     * @var Repository_Category
     */
    private $_repository_category;


    public function __construct($repository_blog, $repository_media, $repository_category)
    {
        $this->_repository_blog = $repository_blog;
        $this->_repository_media = $repository_media;
        $this->_repository_category = $repository_category;
    }

    public function execute(Entity_User $user, $blog_id)
    {
        $blog = $this->_repository_blog->load_object(array(array('id', '=', $blog_id)));

        if (empty($blog)) {
            throw new Exception('This blog does not exist');
        }

        if ($blog->author_id != $user->id) {
            throw new Exception('This blog does not belong to you');
        }
        $blog->thumbnail = '';

        if (!empty($blog->thumbnail_id)) {
            $thumbnail = $this->_repository_media->load_object(array(array('id', '=', $blog->thumbnail_id)));
            $blog->thumbnail = isset($thumbnail->path) ? $thumbnail->path : '';
        }

        $blog->category_id = $this->_repository_category->get_item_link($blog->id)['term_taxonomy_id'];
        return $blog;
    }
}