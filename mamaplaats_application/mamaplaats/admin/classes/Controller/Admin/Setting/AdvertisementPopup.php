<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Setting_AdvertisementPopup extends Controller_Admin_Base {

	public function action_list()
	{
		$advertisements = Factory_Repository::advertisement_popup()->load_object(array());

		$this->view = new View_Admin_Setting_AdvertisementPopup_List($advertisements);
	}

	public function action_update()
	{
		$advertisement = Factory_Setting::gets_advertisement_popup()->execute('advertisement-popup');

		$messages = array();
		if ($post = $this->request->post())
		{
			try
			{
				$file = $this->_upload_image($_FILES['image']);

				if ($file === FALSE)
				{
					throw new Validate_Exception('Image upload failed', array('Je foto is niet geupload. De maximale grootte is 5MB en alleen png, jpg en gif foto\'s zijn toegestaan'));
				}

				if ( ! empty($file->name))
				{
					$post['image'] = $file->name;
				}

				$advertisement = ObjectMapper::factory()->map($post, $advertisement, array());

				if ( ! empty($advertisement->slug))
				{
					Factory_Setting::update_advertisement_popup()->execute($advertisement);
				}
				else
				{
					$advertisement->slug   = 'advertisement-popup';
					Factory_Setting::add_advertisement_popup()->execute($advertisement);
				}

				$messages = array('messages' => array('Advertentie succesvol bijgewerkt.'), 'type' => 'success');

				$this->redirect('admin/setting/advertisements');
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$this->view = new View_Admin_Setting_AdvertisementPopup_Update($advertisement, $messages);
	}

	public function _upload_image($file)
	{
		if (empty($file['tmp_name']))
		{
			return TRUE;
		}

		$file_validate = new File_Validate;

		$file = File_Mapper_Factory::post()->map($file);

		try
		{
			$file_validate->validate($file, array('png', 'jpg', 'gif'));
			$file_validate->size_not_more_than($file, 5);

			$file->name = 'advertisement-popup.'.strtolower(pathinfo($file->name, PATHINFO_EXTENSION));

			File_Storage_Factory::file_system()->store('advertisements', $file);

			return $file;
		}
		catch (Exception $e)
		{
			return FALSE;
		}
	}
}