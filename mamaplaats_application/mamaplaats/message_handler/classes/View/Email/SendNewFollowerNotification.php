<?php defined('SYSPATH') or die('No direct script access.');

class View_Email_SendNewFollowerNotification extends Kostache
{

    use View_Helper_ImagePath;

    /**
     * @var string The page title
     */
    public $subject = '';

    /**
     * @var string The title
     */
    public $title = 'Wat leuk, je hebt een volger!';

    /**
     * @var array
     */
    private $_user;

    public function __construct(array $parameters)
    {
        $this->_user = $parameters['user'];
        $this->subject = $parameters['subject'];
    }

    public function description() {
        return 'Wie volg jij allemaal?  '.ucfirst($this->_user->display_name).' volgt jou!';
    }


    public function user()
    {
        $array = array(
            'user_details' => substr(strip_tags($this->_user->biography), 0, 120) . '...',
            'following_blog_url' => Route::url('user_blog', array('action' => 'following')),
            'follower_name' => ucfirst($this->_user->display_name),
            'avatar' => URL::site($this->get_image_path('avatar', $this->_user->id, 100, 100, $this->_user->profile_image_ext)),
            'user_link' => Route::url('Author_Index', array('slug' => $this->_user->display_name))
        );
        return $array;
    }
}