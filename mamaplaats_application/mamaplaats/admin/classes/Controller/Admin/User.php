<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Admin_Base {

	public function action_list()
	{
		$query = $this->request->query();

		$users = array();
		if ( ! empty($query['search']))
		{
			$users = Factory_Editor::gets_user_list()->execute($query['search']);
		}

		$this->view = new View_Admin_User_List($users, $query);
	}

	public function action_index()
	{
		$user_id = $this->request->param('user_id');

		$messages = array();
		if ($post = $this->request->post() AND ! empty($user_id))
		{
			try
			{
				// Add the avatar
				if ( ! empty($_FILES['avatar']['tmp_name']))
				{
					$file   =   $_FILES['avatar'];
					$file_validate = new File_Validate;
					$file = File_Mapper_Factory::post()->map($file);
					try
					{
						$file_validate->validate($file, array('png', 'jpg', 'gif'));
						$file_validate->size_not_more_than($file, 5);
						$file->name = $user_id.'.'.strtolower(pathinfo($file->name, PATHINFO_EXTENSION));
						$arrImg = explode(".", $_FILES['avatar']['name']);
						$ext = end($arrImg);
						$post['profile_image_ext'] = $ext;
						$file = File_Storage_Factory::file_system()->store('avatar', $file);
					}
					catch (Exception $e)
					{
						return FALSE;
					}
				}

				if ( empty($post['password']))
				{
					unset($post['password']);
				}

				Factory_Editor::updates_user()->execute($user_id, $post);
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$user = Factory_Editor::gets_user()->execute($user_id);
		$this->view = new View_Admin_User_Index($user, $messages);
	}
}