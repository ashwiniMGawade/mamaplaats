<?php

class Controller_Author extends Controller_Base {

	public function action_list()
	{
		$first_letter = $this->request->param('first_letter');

		// Redirect the user to A if no letter is set
		if (empty($first_letter))
		{
			$this->redirect(Route::url('Author_List', array('first_letter' => 'A')));
		}

		if ( ! empty($this->auth_user))
		{
			if ($post = $this->request->post())
			{
				Factory_User::updates_following()->execute($this->auth_user, $post['following_id']);
			}

			$author_list = Factory_User::gets_author_list()->execute($this->auth_user, $first_letter);
		}
		else
		{
			$author_list = Factory_Guest::gets_author_list()->execute($first_letter);
		}

		$this->view = new View_Author_List($author_list, $first_letter);
	}

	public function action_index()
	{
		$author_slug = $this->request->param('slug');
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 15);
		$offset = Arr::get($query, 'offset', 0);

		try
		{
			$author_info = Factory_Guest::gets_author_info()->execute($author_slug, $limit, $offset);
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		// This is to repair legacy redirects please remove in a few months. Date: 29-08-2014
		if ( ! empty($author_info['author']->slug) AND $author_info['author']->slug != $author_slug)
		{
			$this->redirect('lid/'.$author_info['author']->slug, 301);
		}

		$this->view = new View_Author_Index($this->auth_user, $author_info['author'], $author_info['blog_list']);
	}
}