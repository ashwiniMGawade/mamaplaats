<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Seo_Redirect extends Controller_Admin_Base {

	public function action_list()
	{
		$redirects = Factory_Repository::seo_redirect()->load_set(array());

		$messages = array();
		$post = $this->request->post();
		if ( ! empty($post))
		{
			try
			{
				$redirect = ObjectMapper::factory()->map($post, new Entity_Seo_Redirect);
				Factory_Editor::adds_seo_redirect()->execute($redirect);

				$this->redirect('/admin/seo/redirects');
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$this->view = new View_Admin_Seo_Redirect_Index($redirects, $messages);
	}

	public function action_delete()
	{
		$entity = new Entity_Seo_Redirect(array('id' => $this->request->param('id')));
		Factory_Repository::seo_redirect()->delete($entity);

		$this->redirect('/admin/seo/redirects');
	}
}