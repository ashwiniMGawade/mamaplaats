<?php

class View_User_Blog_Index {
	use View_Helper_Select, View_Helper_Message;

	public $title = 'Blog schrijven';

	private $_user;
	private $_blog;
	private $_parent_categories;
	private $_sub_categories;
	private $_messages;
	private $_selected_parent_id;

	public function __construct(Entity_User $user, $blog, $parent_categories, $sub_categories, $selected_parent_id, $messages)
	{
		$this->_user = $user;
		$this->_blog = $blog;
		$this->_parent_categories = $parent_categories;
		$this->_sub_categories = $sub_categories;
		$this->_messages = $messages;
		$this->_selected_parent_id = $selected_parent_id;
	}

	public function has_messages()
	{
		return $this->format_messages($this->_messages);
	}

	public function profile_complete()
	{
		// Check if the user has a biography profile picture
		$profile_image = glob("uploads/avatar/".$this->_user->id."*");
		return ( ! empty($this->_user->biography) AND !empty($profile_image));
	}

	public function is_published()
	{
		return ($this->_blog->status == 'publish');
	}

	public function is_draft()
	{
		return ($this->_blog->status == 'draft');
	}

	public function blog()
	{
		return $this->_blog;
	}

	public function parent_categories()
	{
		$categories = array();
		foreach ($this->_parent_categories as $category)
		{

			if (in_array($category->term_id, array(19, 47, 130, 613, 614, 1286, 1635, 1676, 2270, 3105, 3106, 3107, 3110)))
			{
				continue;
			}

			$categories[] = array(
				'value' 	=> $category->id,
				'text' 		=> $category->title,
				'id'		=> $category->term_id,
				'parent_id'	=> $category->parent_id,
				'disabled' 	=> false,
			);
		}

		$category_id = $this->_selected_parent_id;

		return $this->select_nested($categories, $category_id);
	}

    public function sub_categories()
    {
        $categories = array();
        foreach ($this->_sub_categories as $category)
        {
            if (in_array($category->term_id, array(19, 47, 130, 613, 614, 1286, 1635, 1676, 2270, 3105, 3106, 3107, 3110)))
            {
                continue;
            }

            $categories[$category->id]	= $category->title;

        }
        $category_id = ( ! empty($this->_blog->category_id)) ? $this->_blog->category_id : '';
        return $this->select_list($categories, $category_id);
    }
}
