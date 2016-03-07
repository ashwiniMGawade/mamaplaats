<?php

class Controller_Win extends Controller_Base {

	public function action_index()
	{
		$win_slug = $this->request->param('slug');

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

					$this->redirect(Route::url('Win', array('slug' => $win_slug)).'#comment_'.$comment->id);
				}
				catch (Validate_Exception $e)
				{
					$messages = array('messages' => $e->errors, 'type' => 'error');
				}

			}
		}

		try
		{
			$win = Factory_Guest::gets_win()->execute($win_slug);
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			// 'RelatedReview' => NULL,
		));
        $query = $this->request->query();
		$this->view = new View_Win_Index($win, $this->auth_user, $widgets->render(), $messages, $query, $post);
	}

	public function action_list()
	{
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 15);
		$offset = Arr::get($query, 'offset', 0);

		$win_list = Factory_Guest::gets_win_list()->execute($limit, $offset);
		$this->view = new View_Win_List($win_list);
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