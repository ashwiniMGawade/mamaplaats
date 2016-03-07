<?php

class Controller_Expert extends Controller_Base {

	public function action_index()
	{
		$expert_slug = $this->request->param('slug');

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
					}

					$this->redirect(Route::url('Expert', array('slug' => $expert_slug)).'#comment_'.$comment->id);
				}
				catch (Validate_Exception $e)
				{
					$messages = array('messages' => $e->errors, 'type' => 'error');
				}

			}
		}

		try
		{
			$expert = Factory_Guest::gets_expert()->execute($expert_slug);
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			'LatestWin' => NULL,
			// 'RelatedReview' => NULL,
		));

        $script_urls_array = Kohana::$config->load('core_config')->get('script_urls_for_videopost');

		$this->view = new View_Expert_Index($expert, $this->auth_user, $widgets->render(), $messages,  $script_urls_array);
	}

	public function action_list()
	{
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 16);
		$offset = Arr::get($query, 'offset', 0);

		$category_slug = $this->request->param('slug');
		$expert_list = Factory_Guest::gets_expert_list()->execute($category_slug, $limit, $offset);
		$featured_section = Factory_Featured_Section::load('expert-'.$category_slug);

		$this->view = new View_Expert_List($expert_list, $featured_section, $category_slug);
		$this->view->category_slug = $category_slug;
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