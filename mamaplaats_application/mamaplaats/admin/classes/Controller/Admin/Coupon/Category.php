<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Coupon_Category extends Controller_Admin_Base {

	public function action_list()
	{
		$delete_id = $this->request->query('delete_id');
		if ( ! empty($delete_id))
		{
			Factory_Repository::coupon_category()->delete(new Entity_Coupon_Category(array('id' => $delete_id)));
			$this->redirect('/admin/coupon/categories');
		}

		$categories = Factory_Repository::coupon_category()->load_set(array());
		$this->view = new View_Admin_Coupon_Category_List($categories);
	}

	public function action_index()
	{
		$category_id = $this->request->param('id');

		$category = new Entity_Coupon_Category;
		if ( ! empty($category_id))
		{
			$category = Factory_Repository::coupon_category()->load_object(array(array('id', '=', $category_id)));
		}

		$messages = array();
		$post = $this->request->post();
		if ( ! empty($post))
		{
			try
			{
				if ( ! empty($category_id))
				{
					$category = Factory_Editor::updates_coupon_category()->execute($category_id, $post);
				}
				else
				{
					$category = Factory_Editor::adds_coupon_category()->execute($post);
				}

				$this->redirect('/admin/coupon/category/'.$category->id);
			}
			catch (Validate_Exception $e)
			{
				$category = $e->object;
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$this->view = new View_Admin_Coupon_Category_Index($category, $messages);
	}
}