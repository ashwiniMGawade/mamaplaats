<?php

class Controller_Review extends Controller_Base {

	public function action_coming()
	{
		$review_products = Factory_Guest::gets_review_product_list()->execute();
		$reviewed_products = Factory_Guest::gets_reviewed_product_list()->execute(15);

		$this->view = new View_Review_Coming_Product_List($this->auth_user, $review_products, $reviewed_products);
	}

	public function action_running()
	{
		$running_products = Factory_Guest::gets_running_review_products()->execute(1);
		$finished_products = Factory_Guest::gets_reviewed_product_list()->execute(15);

		$this->view = new View_Review_Running_Product_List($this->auth_user, $running_products, $finished_products);
	}

	public function action_finished()
	{
		$query = $this->request->query();
		$limit = Arr::get($query, 'limit', 15);
		$offset = Arr::get($query, 'offset', 0);

		$products = Factory_Guest::gets_reviewed_product_list()->execute($limit, $offset);
		$this->view = new View_Review_Product_List($products);
	}

	public function action_product_single()
	{
		try
		{
			$product = Factory_Guest::gets_review_product()->execute($this->request->param('slug'));
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			'RelatedExpertAdvice' => array($product['product']->category_id),
			'LatestWin' => NULL,
		));

        $script_urls_array = Kohana::$config->load('core_config')->get('script_urls_for_videopost');

		$this->view = new View_Review_Product_Single($product, $widgets->render(), $script_urls_array);
	}

	public function action_single()
	{
		try
		{
			$review = Factory_Guest::gets_product_review()->execute($this->request->param('slug'));
		}
		catch (Exception $e)
		{
			throw new HTTP_Exception_404($e->getMessage());
		}

		$widgets = Widget_Factory::load(array(
			'MostViewedBlogs' => NULL,
			'LatestWin' => NULL,
		));

		$this->view = new View_Review_Single($review, $widgets->render());
	}
}