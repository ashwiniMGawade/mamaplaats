<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Media extends Controller_Admin_Base {

	public function action_delete()
	{
		$media_id = $this->request->param('media_id');
		$redirect = $this->request->query('redirect');

		Factory_Editor::deletes_media()->execute($media_id);

		$this->redirect($redirect);
	}
}