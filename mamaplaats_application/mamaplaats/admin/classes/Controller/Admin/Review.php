<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Review extends Controller_Admin_Base {

	public function action_index()
	{
		$review_id = $this->request->param('review_id');
		$review = Factory_Editor::gets_review()->execute($review_id);

		$messages 	= array();
		$post = $this->request->post();

		if ( ! empty($post) AND ! empty($review_id))
		{
			try
			{
				foreach ($post['media'] as $i => $file)
				{
					// If there is an upload store it
					if ( ! empty($_FILES[$i]['tmp_name']))
					{
						$post['media'][$i]['path'] = $this->_store_media($review_id, $_FILES[$i]);
					}

					// We need a title or path
					if (empty($post['media'][$i]['title']) OR empty($post['media'][$i]['path']))
					{
						unset($post['media'][$i]);
					}
				}

				Factory_Editor::updates_review()->execute($review_id, $post);
				$this->redirect('admin/review/'.$review_id);
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
				$review['review'] = $e->object;
			}
		}

		$this->view = new View_Admin_Review_Index($review, $messages);
	}

	private function _store_media($review_id, $media)
	{
		$path = 'review/'.$review_id;

		$file = File_Mapper_Factory::post()->map($media);
		$file = File_Storage_Factory::file_system()->store($path, $file, array('rename' => TRUE));

		return $file->path;
	}
}