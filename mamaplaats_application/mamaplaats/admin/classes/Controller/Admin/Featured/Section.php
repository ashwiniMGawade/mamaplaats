<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Featured_Section extends Controller_Admin_Base {

	public function action_list()
	{
		$delete_id = $this->request->query('delete_id');
		if ( ! empty($delete_id))
		{
			Factory_Repository::coupon_slide()->delete(new Entity_Coupon_Slide(array('id' => $delete_id)));
			$this->redirect('/admin/coupon/slider');
		}

		$section = Factory_Editor::gets_featured_section_list()->execute();

		$this->view = new View_Admin_Featured_Section_List($section);
	}

	public function action_index()
	{
		$id = $this->request->param('id');
		$section = Factory_Editor::gets_featured_section()->execute($id);

		$messages = array();
		$post = $this->request->post();

		if ( ! empty($post))
		{
			$post = $this->_process_input($post, $_FILES);

			try
			{
				if (empty($id))
				{
					$section = Factory_Editor::adds_featured_section()->execute($post);
				}
				else
				{
					$section = Factory_Editor::updates_featured_section()->execute($id, $post);
				}

				$this->redirect('/admin/featured-section/'.$section->id);
			}
			catch (Validate_Exception $e)
			{
				$section = $e->object;
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$this->view = new View_Admin_Featured_Section_Index($section, $messages);
	}

	private function _process_input($post, $files)
	{
		// Check if there is a new file
		if ( ! empty($post['blocks']['new']['title']) AND ! empty($post['blocks']['new']['url']))
		{
			$path = 'featured-section';
			if ( ! empty($post['tag']))
			{
				$path = $path.'/'.$post['tag'];
			}

			$post['blocks']['new']['image'] = $this->_save_section_image($path, $files);
		}
		else
		{
			unset($post['blocks']['new']);
		}

		// Delete the blocks with the delete flag
		foreach ($post['blocks'] as $i => $block)
		{
			if ( ! empty($block['delete']))
			{
				unset($post['blocks'][$i]);
			}
		}

		return $post;
	}

	private function _save_section_image($path, $file)
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

			$converter = new Image_Convert;
			$file->path = $converter->convert($file, 'jpg');

			$file = File_Storage_Factory::file_system()->store($path, $file, array('rename' => TRUE));

			return $file->path;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}
}