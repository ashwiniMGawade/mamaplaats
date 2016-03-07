<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Review_Product extends Controller_Admin_Base {

	public function action_list()
	{
		$review_products = Factory_Editor::gets_review_product_list()->execute();
		$this->view = new View_Admin_Review_Product_List($review_products);
	}

	public function action_index()
	{
		$product_id = $this->request->param('review_product_id');
		$product = Factory_Editor::gets_review_product()->execute($product_id);

		$messages = array();
		if ($post = $this->request->post())
		{
			if ( ! empty($post['reject-all-waiting']))
			{
				Factory_Editor::sets_waiting_reviews_to_denied()->execute($product_id);
				$this->redirect('admin/review-product/'.$product['product']->id);
			}

			if ( ! empty($_FILES['image']['tmp_name']))
			{
				$post['image_url'] = $this->_store_media($_FILES['image']);
			}

			if ( ! empty($post['media']['new']['title']) AND ! empty($_FILES['media']['tmp_name']))
			{
				$post['media']['new']['path'] = $this->_store_media($_FILES['media']);
			}
			elseif (empty($post['media']['new']['title']) AND empty($_FILES['media']['new']['path']))
			{
				unset($post['media']['new']);
			}

			try
			{
				if ( ! empty($product_id))
				{
					$product['product'] = Factory_Editor::updates_review_product()->execute($product_id, $post);
				}
				else
				{
					$product['product'] = Factory_Editor::adds_review_product()->execute($post);
				}

                $this->redirect('admin/review-product/'.$product['product']->id);
			}
			catch (Validate_Exception $e)
			{
				$messages = array('messages' => $e->errors, 'type' => 'error');
				$product['product'] = $e->object;
			}
		}

		$categories = Factory_Editor::gets_category_list()->execute();
		$this->view = new View_Admin_Review_Product_Index($product, $categories, $messages);
	}

	private function _store_media($media)
	{
		$file = File_Mapper_Factory::post()->map($media);
		$file = File_Storage_Factory::file_system()->store('review-product', $file, array('rename' => TRUE));

		return $file->path;
	}

	public function action_export()
	{
		set_time_limit(0);
		ini_set('memory_limit', '1024M');

		$this->auto_render = FALSE;
		$product_id = $this->request->param('review_product_id');
		$product = Factory_Editor::gets_review_product()->execute($product_id);

		// Set the headers
		$this->response->headers('Pragma', 'no-cache');
		$this->response->headers('Expires', '0');
		$this->response->headers('Cache-Control', 'no-store, no-cache, must-revalidate');
		$this->response->headers('Cache-Control', 'pre-check=0, post-check=0, max-age=0');
		$this->response->headers('Content-Transfer-Encoding', 'none');
		$this->response->headers('Content-Type', 'application/vnd.ms-excel;');
		$this->response->headers('Content-type', 'application/x-msexcel');
		$this->response->headers('Content-Disposition', 'attachment; filename="'.basename('ProductDetails-'.date('m-d-Y_H:i:s', time()).'.xls').'"');

		// Get the sales
		$this->view = new View_Admin_Review_Product_Export($product);
		echo $this->view->details();
	}
}