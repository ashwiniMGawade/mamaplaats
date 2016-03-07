<?php defined('SYSPATH') or die('No direct script access.');

class View_Email_DailyCommentDigest extends Kostache {

	use View_Helper_ImagePath;

	/**
	 * @var string The page title
	 */
	public $subject = '';

	/**
	 * @var string The page title
	 */
	public $description = 'Andere moeder hebben gereageerd op jouw blog. Bekijk hier hun reacties en ga direct naar de blog om terug te reageren.';

	/**
	 * @var Entity_User
	 */
	private $_user;

	/**
	 * @var array
	 */
	private $_blogs;

	public function __construct(array $parameters)
	{
		$this->_user 	= $parameters['user'];
		$this->_blogs 	= $parameters['blogs'];
		$this->subject	= $parameters['subject'];
	}

	public function blogs()
	{
		$blogs = array();
		foreach ($this->_blogs as $blog)
		{
			$comments = array();
			foreach ($blog['comments'] as $comment)
			{
				$utm = http_build_query(array(
					'utm_source' 	=> 'daily_comment_digest',
					'utm_medium' 	=> 'email',
					'utm_campaign' 	=> 'transactional_emails',
					'utm_content' 	=> $this->_user->full_name(),
				));

				$comment->avatar = URL::site($this->get_image_path('avatar', $comment->user_id, 100, 100, $comment->profile_image_ext));
				$comment->content = substr(strip_tags($comment->content), 0, 120).'...';
				$comment->url = Route::url('Blog', array('slug' => $blog['blog']->slug)).'#comment_'.$comment->id.'?'.$utm;
				$comments[] = $comment;
			}

			$blog['comments'] = $comments;
			$blogs[] = $blog;
		}

		return $blogs;
	}
}