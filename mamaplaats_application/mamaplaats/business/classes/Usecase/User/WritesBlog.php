<?php

class Usecase_User_WritesBlog
{

    /**
     * @var Repository_Blog
     */
    private $_repository_blog;

    /**
     * @var Repository_Category
     */
    private $_repository_category;

    /**
     * @var Validate_Blog
     */
    private $_validate_blog;

    /**
     * @var Activity_Logger
     */
    private $_activity_logger;

    public function __construct($repository_blog, $repository_category, $validate_blog, $activity_logger)
    {
        $this->_repository_blog = $repository_blog;
        $this->_repository_category = $repository_category;
        $this->_validate_blog = $validate_blog;
        $this->_activity_logger = $activity_logger;
    }

    public function execute(Entity_User $user, $blog_id, array $fields)
    {
        $blog = $this->_get_blog_entity($blog_id);
        $blog->author_id = $user->id;
        $blog->title = $fields['title'];
        $blog->excerpt = $fields['excerpt'];
        $blog->content = $fields['content'];
        $blog->modified = date('Y-m-d H:i:s');
        $blog->modified_gmt = gmdate('Y-m-d H:i:s');

        if (empty($blog->id)) {
            $blog->created = date('Y-m-d H:i:s');
            $blog->created_gmt = gmdate('Y-m-d H:i:s');
        }

        if (!empty($fields['thumbnail_id'])) {
            $blog->thumbnail_id = $fields['thumbnail_id'];
        }

        $previous_status = $blog->status;
        if (!empty($fields['status']) AND in_array($fields['status'], ['draft', 'publish'])) {
            $blog->status = $fields['status'];
        }

        $validate_result = $this->_validate_blog($blog);
        if ($validate_result['status'] !== true) {
            $blog->status = 'draft';
            $blog->slug = '';
            $this->_update_blog($blog, $fields['category_id']);

            throw new Validate_Exception('Invalid blog posted', $validate_result['messages'], $blog);
        }

        $blog->slug = URL::title($blog->title);

        $this->_update_blog($blog, $fields['category_id']);
        $this->_log_activity($user, $blog, $previous_status);

        return $blog;
    }

    private function _get_blog_entity($blog_id)
    {
        if (empty($blog_id)) {
            return new Entity_Blog;
        }

        return $this->_repository_blog->load_object([['id', '=', $blog_id]]);
    }

    private function _validate_blog(Entity_Blog $blog)
    {
        $this->_validate_blog->load($blog->as_array());
        $this->_validate_blog->default_rules();

        $check = $this->_validate_blog->check();

        $errors = $this->_validate_blog->errors();

        // Check if the blog title and slug doesn't exist already
        if (!empty($blog->title) AND $this->_no_duplicate_blogs($blog) === false) {
            $errors['title'] = "De titel '" . $blog->title . "' is al in gebruik.";
            $check = false;
        }

        return ['status' => $check, 'messages' => $errors];
    }

    private function _no_duplicate_blogs($blog)
    {
        $blog_title = $this->_repository_blog->load_object([['id', '!=', $blog->id], ['title', '=', $blog->title]]);

        return (empty($blog_title));
    }

    private function _update_blog($blog, $category_id)
    {
        if ($blog->id) {
            $blog = $this->_repository_blog->update($blog);
        } else {
            $blog = $this->_repository_blog->create($blog);
        }

        $this->_repository_category->create_item_link($category_id, $blog->id);

        return $blog;
    }

    private function _log_activity($user, $blog, $previous_status)
    {
        if ($previous_status == 'draft' AND $blog->status == 'publish') {
            $this->_activity_logger->log($user, 'user_published_blog', $blog);
        }
    }
}