<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Blog_AdminBlogs {

    use View_Helper_ImagePath;

    public $title = 'Blogs van Mamaplaast';
    private $_blog_list;

    public function __construct(array $blog_list)
    {
        $this->_blog_list = $blog_list;
    }

    public function blog_list()
    {
        $blog_list = array();
        foreach ($this->_blog_list as $blog)
        {
            $media = $blog['media'];
            $media->path = $this->get_image_legacy($media->path, 230);

            $blog_item = $blog['blog'];
            $blog_item->excerpt = $blog_item->get_excerpt(120).'...';
            $blog_item->created_formatted = strftime('%e %b %Y', strtotime($blog_item->created));

            $blog_list[] = array_merge($blog, array('blog' => $blog_item, 'media' => $media));
        }

        return $blog_list;
    }
}