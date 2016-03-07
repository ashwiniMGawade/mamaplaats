<?php

class View_Blog_Index
{

    use View_Helper_Message, View_Helper_Comment, View_Helper_ImagePath, View_Helper_Advertisements, View_Helper_Device;

    private $_blog;
    private $_user;
    public $widgets;
    public $script_urls_array;

    public function __construct($blog, $user, $widgets, $message, $script_urls_array)
    {
        $this->title = $blog['blog']->get_meta_title();
        $this->description = $blog['blog']->get_meta_description();

        // Create the thumbnail URL
        if (!empty($blog['image'])) {
            $blog['blog']->thumbnail = $this->get_image_legacy($blog['image']->path, 750, 'n', FALSE);
            $this->image = URL::site($blog['blog']->thumbnail, TRUE);
        }

        $this->comment_item_id = $blog['blog']->id;
        $this->comment_author_id = $blog['blog']->author_id;

        $this->_blog = $blog;
        $this->_user = $user;

        $this->widgets = $widgets;
        $this->messages = $message;
        $this->script_urls_array = $script_urls_array;
    }

    public function show_script()
    {
        $blog = $this->_blog['blog'];
        if(in_array(trim($blog->slug), $this->script_urls_array)) {
            return true;
        }
        return false;
    }

    public function logged_in()
    {
        if (empty($this->_user)) {
            return array();
        }
        return $this->_user;
    }

    public function blog()
    {
        $blog = $this->_blog['blog'];
        $blog->created_formatted = strftime('%A %e %B %Y', strtotime($blog->created));

        return $blog;
    }

    public function author()
    {
        $author = $this->_blog['author'];
        $author->avatar = $this->get_image_path('avatar', $author->id, 140, 140, $author->profile_image_ext);

        return $author;
    }

    public function related()
    {
        $related_blogs = array();
        foreach ($this->_blog['related'] as $related_blog) {
            $related_blog['image']->path = $this->get_image_legacy($related_blog['image']->path, 228, 213);
            $related_blog['blog']->excerpt = $related_blog['blog']->get_excerpt(90);
            $related_blogs[] = $related_blog;
        }

        return $related_blogs;
    }

    public function show_edit_link()
    {
        if (isset($this->_user->id) && $this->_blog['author']->id == $this->_user->id) {
            return true;
        }
        return false;
    }

    public function comments()
    {
        return array(
            'children' => $this->format_comments($this->_blog['comments'])
        );
    }

    public function has_messages()
    {
        return $this->get_messages();
    }

    public function basepath()
    {
        return URL::base();
    }

    public function next_blog()
    {
        return $this->_blog['next_blog'];
    }

    public function previous_blog()
    {
        return $this->_blog['previous_blog'];
    }

    public function link_comments()
    {
        return (!empty($this->_blog['comments'])) ? 'comments' : 'reply_box_container';
    }
}