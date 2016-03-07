<?php

class Controller_Blog extends Controller_Base {

	public function action_index()
	{
		$blog_slug = $this->request->param('slug');

		$messages = array();
		if ($post = $this->request->post())
		{
			if ( ! empty($post['comment']))
			{
				try
				{
					if ( ! empty($this->auth_user))
					{
						$comment = Factory_User::posts_comment()->execute($this->auth_user, $post['comment'], $this->_get_extra_fields());
					}
					else
					{
						$comment = Factory_Guest::posts_comment()->execute($post['comment'], $this->_get_extra_fields());

						if (isset($post['comment']['register_newletter']))
						{
							$email	= Array(
								'email'	=> $post['comment']['email']
							);

							Factory_Guest::subscribes_for_newsletter()->execute($email);
						}
					}

					$this->redirect(Route::url('Blog', array('slug' => $blog_slug)).'#comment_'.$comment->id);
				}
				catch (Validate_Exception $e)
				{
					$messages = array('messages' => $e->errors, 'type' => 'error');
				}
			}
		}

		try
		{
			$blog = Factory_Guest::gets_blog()->execute($blog_slug);
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			'RelatedExpertAdvice' => array($blog['blog']->categories),
			// 'RelatedReview' => NULL,
			'LatestWin' => NULL,
		));
        $script_urls_array = Kohana::$config->load('core_config')->get('script_urls_for_videopost');
		$this->view = new View_Blog_Index($blog, $this->auth_user, $widgets->render(), $messages, $script_urls_array);
	}

	public function action_list()
	{
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 15);
		$offset = Arr::get($query, 'offset', 0);

		$category_slug = $this->request->param('slug');
		$blog_list = Factory_Guest::gets_blog_list()->execute($category_slug, $limit, $offset);

		$category = FALSE;
		if ( ! empty($category_slug))
		{
			$category = Factory_Repository::category()->load_object(array(array('slug', '=', $category_slug)));
		}

		// We use a different view for recipe's
		if ($category_slug == 'recepten')
		{
			$featured_recipes = Factory_Featured_Section::load('recipes');
			$this->view = new View_Recipe_List($blog_list, $category, $featured_recipes);
		}
		else
		{
			$widgets = Widget_Factory::load(array(
				'MostViewedBlogs' => NULL,
				'RelatedExpertAdvice' => array($category_slug),
				// 'RelatedReview' => NULL,
				'LatestWin' => NULL,
				// 'LatestComments' => NULL,
			));

			$this->view = new View_Blog_List($blog_list, $category, $widgets->render());
		}
	}

	private function _get_extra_fields()
	{
		return array(
			'blog_url'	=> URL::base(TRUE),
			'referrer'	=> $this->request->referrer(),
			'page_url'	=> $this->request->url(),
			'agent'		=> $_SERVER['HTTP_USER_AGENT'],
			'ip' 		=> $_SERVER['REMOTE_ADDR'],
		);
	}
}