<?php

class Controller_User_Blog extends Controller_Base
{

    public function before()
    {
        parent::before();

        if (empty($this->auth_user)) {
            $this->redirect(Route::url('user_login'));
        }
    }

    public function action_index()
    {
        $session = Session::instance();

        $blog_id = $this->request->param('blog_id');
        $blog = (!empty($blog_id)) ? Factory_User::gets_own_blog()->execute($this->auth_user, $blog_id) : new Entity_Blog;
        $sub_categories = array();

        if ($post = $this->request->post()) {
            try {
                if (!empty($_FILES['file']['tmp_name'])) {
                    $file = $this->_upload_media_file($_FILES['file']);
                    $media = $this->_add_record_for_uploaded_file($this->auth_user, $blog_id, $file);
                    $post['thumbnail_id'] = $media->id;
                }
                $post['content'] = Security::xss_clean($post['content']);

                $blog = Factory_User::writes_blog()->execute($this->auth_user, $blog_id, $post);

            } catch (Validate_Exception $e) {
                $session->set('errors', array('messages' => $e->errors, 'type' => 'error'));
                $blog = $e->object;
            } catch (Exception $e) {
                $session->set('errors', array('messages' => array(
                    'Kon foto niet uploaden. De maximale grootte is 5MB en alleen png, jpg en gif foto\'s zijn toegestaan.'
                ), 'type' => 'error'));
            }

            $this->redirect('/user/blog/index/' . $blog->id);
        }

        $parent_id = 0;
        $selected_parent_id = 0;
        $parent_categories = Factory_User::gets_category_list()->execute($parent_id);

        if (!empty($blog_id)) {
            $blog_category_details = Factory_Repository::category()->load_object(array(
                array('id', '=', $blog->category_id)
            ));
            if (!empty($blog_category_details)) {
                $selected_parent_id = $this->_get_level_zero_parent_id($blog_category_details->parent_id);
                $sub_categories = $this->_get_level_zero_categories($selected_parent_id);
            }
        }
        $view = new View_User_Blog_Index($this->auth_user, $blog, $parent_categories, $sub_categories, $selected_parent_id,  $session->get_once('errors', array()));

        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    private function _get_level_zero_parent_id($parent_id) {
        $blog_category_details = Factory_Repository::category()->load_object(array(
            array('term_id', '=', $parent_id)
        ));
        if (empty($blog_category_details) or $blog_category_details->parent_id == 0){
            return $parent_id;
        }
        return $this->_get_level_zero_parent_id($blog_category_details->parent_id);
    }


    private function _get_level_zero_categories($parent_id) {
        $level_zero_sub_categories = array();
        $sub_categories = Factory_User::gets_category_list()->execute($parent_id);

        foreach ($sub_categories as $sub_category){
            $sub_sub_categories = Factory_User::gets_category_list()->execute($sub_category->term_id);
            foreach ($sub_sub_categories as $sub_sub_category) {
                $sub_sub_sub_categories = Factory_User::gets_category_list()->execute($sub_sub_category->term_id);
                $level_zero_sub_categories = array_merge($level_zero_sub_categories, $sub_sub_sub_categories);
            }
            $level_zero_sub_categories = array_merge($level_zero_sub_categories, $sub_sub_categories);
        }
        return $level_zero_sub_categories;
    }

    public function action_upload_media()
    {
        $this->auto_render = FALSE;
        $blog_id = $this->request->post('blog_id');

        try {
            $file = $this->_upload_media_file($_FILES['file'], 750);
            $media = $this->_add_record_for_uploaded_file($this->auth_user, $blog_id, $file);

            $this->response->body(json_encode(array('filelink' => URL::site($media->path))));
        } catch (Exception $e) {
            $this->response->body(json_encode(array('error' => '
				Kon foto niet uploaden. De maximale grootte is 5MB en alleen png, jpg en gif foto\'s zijn toegestaan.
			')));
        }
    }

    public function action_get_sub_categories()
    {
        $this->auto_render = FALSE;
        $parent_id = $this->request->post('parent_id');

        try {
            $sub_categories = $this->_get_level_zero_categories($parent_id);
            $this->response->body(json_encode($sub_categories));
        } catch (Exception $e) {
            $this->response->body(json_encode(array('error' => '
				geen subcategorieën gevonden..
			')));
        }
    }

    private function _upload_media_file($file, $dimension_limit = NULL)
    {
        $file = File_Mapper_Factory::post()->map($file);

        $validate = new File_Validate;
        $validate->validate($file, array('png', 'jpg', 'gif'));
        $validate->size_not_more_than($file, 5);

        // Resize the image when it is to big
        if (!empty($dimension_limit) AND is_numeric($dimension_limit)) {
            list($width, $height) = getimagesize($file->path);

            if ($width > $dimension_limit OR $height > $dimension_limit) {
                Image::factory($file->path)
                    ->resize($dimension_limit, $dimension_limit, Image::AUTO)
                    ->save($file->path);
            }
        }

        return File_Storage_Factory::wordpress()->store('', $file);
    }

    private function _add_record_for_uploaded_file($user, $blog_id, File_Object $file)
    {
        $media = new Entity_Media;
        $media->user_id = $user->id;
        $media->post_id = $blog_id;
        $media->title = $file->name;
        $media->path = URL::site($file->path);
        $media->type = $file->mime_type;
        $media->created = date('Y-m-d H:i:s');

        return Factory_Repository::legacy_media()->create($media);
    }

    public function action_most_read()
    {
        $query = $this->request->query();
        $limit = Arr::get($query, 'limit', 15);
        $offset = Arr::get($query, 'offset', 0);

        $filters = array(
            array('blog.post_date', '>', date('Y-m-d 00:00:00', strtotime('-30 days'))),
        );

        $blog_list = Factory_User::gets_most_read_blogs()->execute($filters, $limit, $offset);
        $view = new View_User_Blog_MostRead($blog_list);
        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_list()
    {
        $session = Session::instance();

        $query = $this->request->query();
        $limit = Arr::get($query, 'limit', 15);
        $offset = Arr::get($query, 'offset', 0);

        $filters = array(
            'post_status' => 'publish'
        );
        $title = 'Mijn Blogs';
        $list_type = '';
        $params = $this->request->param();

        if (!empty($params['blog_id']) AND $params['blog_id'] == 'concepts') {
            $filters['post_status'] = 'draft';
            $title = 'Mijn concepten';
            $list_type = 'concepts';
        }

        $blog_list = Factory_User::get_own_blog_list()->execute($this->auth_user, $filters, $limit, $offset);
        $view = new View_User_Blog_List($blog_list, $title, $list_type, $session->get_once('post_messages', array()));
        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_delete()
    {
        $session = Session::instance();

        $blog_id = $this->request->param('blog_id');
        $blog = (!empty($blog_id)) ? Factory_User::gets_own_blog()->execute($this->auth_user, $blog_id) : new Entity_Blog;

        if (!empty($blog)) {
            try {
                Factory_Repository::blog()->delete($blog);

                $session->set('post_messages', array('messages' => array(
                    'Bericht succesvol verwijderd.'
                ), 'type' => 'success'));
            } catch (Exception $e) {
                $session->set('post_messages', array('messages' => array(
                    'Bericht kan niet worden verwijderd.'
                ), 'type' => 'error'));
            }
        }

        $this->redirect('/user/blog/list/concepts');
    }

    public function action_admin_blogs()
    {
        $query = $this->request->query();
        $limit = Arr::get($query, 'limit', 15);
        $offset = Arr::get($query, 'offset', 0);

        $params = $this->request->param();
        $filters = array(
            'post_status' => 'publish'
        );

        $blog_list = Factory_User::gets_admin_blog_list()->execute($filters, $limit, $offset);
        $view = new View_User_Blog_AdminBlogs($blog_list);
        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }

    public function action_following()
    {
        $limit = $this->request->query('limit');
        $offset = $this->request->query('offset');
        $list_type = '';

        $blog_list = Factory_User::gets_following_user_blogs()->execute($this->auth_user, $limit, $offset);
        $view = new View_User_Blog_Following($blog_list);
        $this->view = Factory_Profile::render($this->request, $this->auth_user, $view);
    }
}