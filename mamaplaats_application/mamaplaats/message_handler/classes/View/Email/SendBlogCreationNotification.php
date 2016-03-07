<?php defined('SYSPATH') or die('No direct script access.');

class View_Email_SendBlogCreationNotification extends Kostache
{

    use View_Helper_ImagePath;

    /**
     * @var string The page title
     */
    public $subject = '';

    /**
     * @var string The page description, header text before header
     */
    public $follower_name = '';

    /**
     * @var array
     */
    private $_blog;

    public function __construct(array $parameters)
    {
        $this->_blog = $parameters['blog'];
        $this->subject = $parameters['subject'];
        $this->user = $parameters['user'];
        $this->follower_name = $parameters['follower_name'];
    }

    public function blog()
    {
        $array = array(
            'blog_title' => $this->_blog->title,
            'blog_content' => substr(strip_tags($this->_blog->content), 0, 120) . '...',
            'blog_url' => Route::url('Blog', array('slug' => $this->_blog->slug)),
            'author_name' => $this->user->display_name,
            'avatar' => URL::site($this->get_image_path('avatar', $this->_blog->author_id, 100, 100, $this->user->profile_image_ext)),
            'user_blog' => Route::url('Author_Index', array('slug' => $this->user->display_name))
        );
        return $array;
    }
}