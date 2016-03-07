<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Coupon_Shop extends Controller_Admin_Base {

	public function action_list()
	{
		$delete_id = $this->request->query('delete_id');
		if ( ! empty($delete_id))
		{
			Factory_Repository::coupon_shop()->delete(new Entity_Coupon_Shop(array('id' => $delete_id)));
			$this->redirect('/admin/coupon/shops');
		}

		$shops = Factory_Repository::coupon_shop()->load_set(array());
		$this->view = new View_Admin_Coupon_Shop_List($shops);
	}

	public function action_index()
	{
		$shop_id = $this->request->param('id');
		$shop = Factory_Editor::gets_coupon_shop()->execute($shop_id);

		$messages = array();
		$post = $this->request->post();
		if ( ! empty($post))
		{
			try
			{
				if ( ! empty($shop_id))
				{
					$shop['shop'] = Factory_Editor::updates_coupon_shop()->execute($shop_id, $post);
				}
				else
				{
					$shop['shop'] = Factory_Editor::adds_coupon_shop()->execute($post);
				}

				$this->_save_coupon_shop_logo($shop['shop']->id, $_FILES);
				$this->redirect('/admin/coupon/shop/'.$shop['shop']->id);
			}
			catch (Validate_Exception $e)
			{
				$shop['shop'] = $e->object;
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$categories = Factory_Repository::coupon_category()->load_set(array());
		$this->view = new View_Admin_Coupon_Shop_Index($shop, $categories, $messages);
	}

	private function _save_coupon_shop_logo($shop_id, $file)
	{
		if (empty($file['image']['tmp_name']))
		{
			return FALSE;
		}

		$converter = new Image_Convert;

		$file = File_Mapper_Factory::post()->map($file['image']);
		$file->path = $converter->convert($file, 'jpg');
		$file->name = $shop_id.'.jpg';

		File_Storage_Factory::file_system()->store('coupon/shop', $file);

		return TRUE;
	}
}