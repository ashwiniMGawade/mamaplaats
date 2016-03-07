<?php defined('SYSPATH') or die('No direct script access.');

class View_Email_InstantCommentResponse extends Kostache
{

    use View_Helper_ImagePath;

    /**
     * @var string The page title
     */
    public $subject = '';

    /**
     * @var string The page title
     */
    public $description = '';

    /**
     * @var boolean isBlogOwner
     */
    public $isBlogOwner = false;

    /**
     * @var array
     */
    private $_blog;

    public function __construct(array $parameters)
    {
        $this->_comments = $parameters['comments'];
        $this->subject = $parameters['subject'];
        $this->isBlogOwner = $parameters['isBlogOwner'];
    }

    public function description()
    {
        if ($this->isBlogOwner) {
            return "Andere moeders hebben gereageerd op jouw blog. Bekijk hier hun reacties en ga direct naar de blog om terug te reageren.";
        }
        return "Er is een reactie geplaatst op een blog waar jij ook op hebt gereageerd.";
    }

    public function comments()
    {
        $comments = array();
        foreach ($this->_comments as $comment) {

            $utm = http_build_query(array(
                'utm_source' => 'instant_comment_digest',
                'utm_medium' => 'email',
                'utm_campaign' => 'transactional_emails',
                'utm_content' => $comment->author_name
            ));

            $comment->avatar = URL::site($this->get_image_path('avatar', $comment->user_id, 100, 100, $comment->profile_image_ext));
            $comment->content = substr(strip_tags($comment->content), 0, 120) . '...';
            $comment->url = Route::url('Blog', array('slug' => $comment->blog_slug)) . '#comment_' . $comment->id . '?' . $utm;
            $comment->unsubscribe_url = (isset($comment->unsubscribe_params)) ? Route::url('Unsubscribe') . '?' . $comment->unsubscribe_params : FALSE;
            $comments[] = $comment;
        }

        return $comments;
    }
}