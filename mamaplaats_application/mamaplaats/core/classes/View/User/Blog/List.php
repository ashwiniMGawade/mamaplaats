<?php defined('SYSPATH') or die('No direct script access.');

class View_User_Blog_List
{

    use View_Helper_ImagePath, View_Helper_Message;

    public $title = '';
    private $_blog_list;
    public $list_type = '';
    private $_messages;

    public function __construct(array $blog_list, $title, $list_type, $messages)
    {
        $this->_blog_list = $blog_list;
        $this->title = $title;
        $this->list_type = $list_type;
        $this->_messages = $messages;
    }

    public function has_messages()
    {
        return $this->format_messages($this->_messages);
    }

    public function title()
    {
        return $this->title;
    }

    public function list_type()
    {
        return $this->list_type;
    }

    public function blog_list()
    {
        $blog_list = array();
        foreach ($this->_blog_list as $blog) {
            $blog['blog']->is_live = ($blog['blog']->status == 'published');

            if ($this->list_type == 'concepts') {
                $blog['blog']->link_title = URL::base() . 'user/blog/index/' . $blog['blog']->id;
            } else {
                $blog['blog']->link_title = URL::base() . 'blog/' . $blog['blog']->slug;
            }

            $media = $blog['media'];
            $media->path = $this->get_image_legacy($media->path, 230);

            $blog_item = $blog['blog'];
            $blog_item->excerpt = $blog_item->get_excerpt(120) . '...';
            $blog_item->created_formatted = strftime('%e %b %Y', strtotime($blog_item->created));

            $blog_list[] = array_merge($blog, array('blog' => $blog_item, 'media' => $media));
        }
        return $blog_list;
    }
}