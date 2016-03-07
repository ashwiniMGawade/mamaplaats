<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Coupon_Offer extends Controller_Admin_Base {

	public function action_list()
	{
		$messages = array();
		$delete_id = $this->request->query('delete_id');
		$imported_offers = $this->request->query('imported_offers');

		if ( ! empty($delete_id))
		{
			Factory_Repository::coupon_offer()->delete(new Entity_Coupon_Offer(array('id' => $delete_id)));
			$this->redirect('/admin/coupon/offers');
		}

		if ($imported_offers !== NULL)
		{
			$messages = array('messages' => array($imported_offers.' Nieuwe Aanbiedingen Geimporteerd'), 'type' => 'success');
		}

		$shops = Factory_Repository::coupon_offer()->load_set(array());
		$this->view = new View_Admin_Coupon_Offer_List($shops, $messages);
	}

	public function action_index()
	{
		$offer_id = $this->request->param('id');

		$offer = new Entity_Coupon_Offer;
		if ( ! empty($offer_id))
		{
			$offer = Factory_Repository::coupon_offer()->load_object(array(array('id', '=', $offer_id)));
		}

		$messages = array();
		$post = $this->request->post();
		if ( ! empty($post))
		{
			try
			{
				if ( ! empty($offer_id))
				{
					$offer = Factory_Editor::updates_coupon_offer()->execute($offer_id, $post);
				}
				else
				{
					$offer = Factory_Editor::adds_coupon_offer()->execute($post);
				}

				$this->redirect('/admin/coupon/offer/'.$offer->id);
			}
			catch (Validate_Exception $e)
			{
				$offer = $e->object;
				$messages = array('messages' => $e->errors, 'type' => 'error');
			}
		}

		$shops = Factory_Repository::coupon_shop()->load_set(array());
		$categories = Factory_Repository::coupon_category()->load_set(array());
		$this->view = new View_Admin_Coupon_Offer_Index($offer, $shops, $categories, $messages);
	}

	public function action_import()
	{
		$this->auto_render = FALSE;
		$imported_offers = Factory_Editor::imports_affiliate4you_offers()->execute();

		$this->redirect('/admin/coupon/offers?imported_offers='.count($imported_offers));
	}
}