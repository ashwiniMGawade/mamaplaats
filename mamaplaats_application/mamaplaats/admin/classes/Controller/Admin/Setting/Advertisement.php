<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Setting_Advertisement extends Controller_Admin_Base {

	public function action_list()
	{
		$advertisements = Factory_Repository::advertisement()->load_set(array());

		$this->view = new View_Admin_Setting_Advertisement_List($advertisements, $this->_list_slugs());
	}

	public function action_index()
	{
		$advertisement_id = $this->request->param('id');

		$advertisement = new Entity_Setting_Advertisement;
		if ( ! empty($advertisement_id))
		{
			$advertisement = Factory_Repository::advertisement()->load_object(array(array('id', '=', $advertisement_id)));
            $advertisement->description = html_entity_decode($advertisement->description);
		}

		$messages = array();
		if ($post = $this->request->post())
		{
			try
			{
				$advertisement = ObjectMapper::factory()->map($post, $advertisement, array());

				if ( ! empty($advertisement_id))
				{
					Factory_Setting::update_advertisement()->execute($advertisement);
				}
				else
				{
					Factory_Setting::add_advertisement()->execute($advertisement);
				}

				$messages = array('messages' => array('Advertentie succesvol bijgewerkt.'), 'type' => 'success');

				$this->redirect('admin/advertisements');
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$this->view = new View_Admin_Setting_Advertisement_Index($advertisement, $this->_list_slugs(), $messages);
	}

	public function action_delete()
	{
		$advertisement_id = $this->request->param('id');
		if ( ! empty($advertisement_id))
		{
			Factory_Repository::advertisement()->delete(new Entity_Setting_Advertisement(array('id' => $advertisement_id)));
		}

		$this->redirect('admin/advertisements');
	}

	private function _list_slugs()
	{
		return array(
			'header' => 'header',
			'footer-overview-pages' => 'footer-overview-pages',
			'footer' => 'footer',
			'korting-sidebar' => 'korting-sidebar',
			'blog-overview-sidebar' => 'blog-overview-sidebar',
			'in-blog-sidebar' => 'in-blog-sidebar',
			'in-blog-above-comments' => 'in-blog-above-comments',
			'slide-in-banner-bottom' => 'slide-in-banner-bottom',
		);
	}
}