<?php

class Controller_Advise extends Controller_Base {

	public function action_index()
	{
		$advise_slug = $this->request->param('slug');

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

					$this->redirect(Route::url('Advise', array('slug' => $advise_slug)).'#comment_'.$comment->id);
				}
				catch (Validate_Exception $e)
				{
					$messages = array('messages' => $e->errors, 'type' => 'error');
				}

			}
		}

		try
		{
			$advise = Factory_Guest::gets_advise()->execute($advise_slug);
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			// 'RelatedReview' => NULL,
			'LatestWin' => NULL,
		));

		$this->view = new View_Advise_Index($advise, $this->auth_user, $widgets->render(), $messages);
	}

	public function action_list()
	{
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 15);
		$offset = Arr::get($query, 'offset', 0);

		$category_slug = $this->request->param('slug');
		$advise_list = Factory_Guest::gets_advise_list()->execute($category_slug, $limit, $offset);

		$category = FALSE;
		if ( ! empty($category_slug))
		{
			$category = Factory_Repository::category()->load_object(array(array('slug', '=', $category_slug)));
		}

		$featured_section = Factory_Featured_Section::load('advise-'.$category_slug);

		$this->view = new View_Advise_List(
			$advise_list,
			$category,
			$featured_section
		);
	}

    public function action_search()
    {
        $this->auto_render = false;
        $query = $this->request->query();
        $category_slug = $this->request->param('slug');

        $search_items_list = Factory_Guest::gets_search_advise_list()->execute($category_slug, $query, 5, 0);
        $view = new View_Advise_SearchList(
            $search_items_list
        );
        $this->response->headers('Content-Type', 'application/json');
        $this->response->body($view->render());
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