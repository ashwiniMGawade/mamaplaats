<?php

class Controller_Api_User_Blog extends Controller_Base {

	public function action_most_read()
	{
		$this->auto_render = FALSE;
		$limit = $this->request->query('limit');
		$offset	= $this->request->query('offset');
		$list_type = '';

		$filters = array(
			array('blog.post_date', '>', date('Y-m-d 00:00:00', strtotime('-30 days'))),
		);

		$blog_list = Factory_User::gets_most_read_blogs()->execute($filters, $limit, $offset);
		$rendered_list = Kostache::factory()->render(new View_User_Blog_Items($blog_list, $list_type));
		$this->response->body($rendered_list);
	}

	public function action_following()
	{
		$this->auto_render = FALSE;
		$limit = $this->request->query('limit');
		$offset	= $this->request->query('offset');
		$list_type = '';

		$blog_list = Factory_User::gets_following_user_blogs()->execute($this->auth_user, $limit, $offset);
		$rendered_list = Kostache::factory()->render(new View_User_Blog_Items($blog_list, $list_type));
		$this->response->body($rendered_list);
	}

    public function action_admin_blogs()
    {
        $this->auto_render = FALSE;
        $limit = $this->request->query('limit');
        $offset	= $this->request->query('offset');
        $list_type = '';

        $filters = array(
            'post_status' => 'publish'
        );

        $blog_list = Factory_User::gets_admin_blog_list()->execute($filters, $limit, $offset);
        $rendered_list = Kostache::factory()->render(new View_User_Blog_Items($blog_list, $list_type));
        $this->response->body($rendered_list);
    }

	public function action_list()
	{
		$this->auto_render = FALSE;
		$limit = $this->request->query('limit');
		$offset	= $this->request->query('offset');
		$list_type = '';
		$filters = array();
		$params = $this->request->param();

		if( ! empty($params['page_slug']))
		{
			$filters['post_status'] = 'draft';
			$list_type = $params['page_slug'];
		}

		$blog_list = Factory_User::get_own_blog_list()->execute($this->auth_user, $filters, $limit, $offset);
		$rendered_list = Kostache::factory()->render(new View_User_Blog_Items($blog_list, $list_type));
		$this->response->body($rendered_list);
	}
}