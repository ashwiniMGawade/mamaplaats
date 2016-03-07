<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Coupon_Slider extends Controller_Admin_Base {

	public function action_index()
	{
		$delete_id = $this->request->query('delete_id');
		if ( ! empty($delete_id))
		{
			Factory_Repository::coupon_slide()->delete(new Entity_Coupon_Slide(array('id' => $delete_id)));
			$this->redirect('/admin/coupon/slider');
		}

		$slides = Factory_Repository::coupon_slide()->load_set_ordered(array());

		$messages = array();
		$post = $this->request->post();

		if ( ! empty($post['slides']))
		{
			try
			{
				$post['slides']['new']['image'] = $this->_save_slide_image($_FILES);
				Factory_Editor::updates_coupon_slider()->execute($post['slides']);

				$this->redirect('/admin/coupon/slider');
			}
			catch (Validate_Exception $e)
			{
				$shop['shop'] = $e->object;
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$this->view = new View_Admin_Coupon_Slider_Index($slides, $messages);
	}

	private function _save_slide_image($file)
	{
		if (empty($file['image']['tmp_name']))
		{
			return FALSE;
		}

		try
		{
			$file = File_Mapper_Factory::post()->map($file['image']);

			$validate = new File_Validate;
			$validate->validate($file, array('png', 'jpg', 'gif'));

			Image::factory($file->path)
				->resize(750, 340, Image::INVERSE)
				->crop(750, 340)
				->save($file->path);

			$converter = new Image_Convert;
			$file->path = $converter->convert($file, 'jpg');

			$file = File_Storage_Factory::file_system()->store('coupon/slide', $file, array('rename' => TRUE));

			return $file->path;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}
}