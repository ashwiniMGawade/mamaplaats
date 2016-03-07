<?php

class Controller_Api_Review_Product extends Controller_Base {

	public function action_list()
	{
		$this->auto_render = FALSE;

		$limit			= $this->request->query('limit');
		$offset			= $this->request->query('offset');

		$products 	= Factory_Guest::gets_reviewed_product_list()->execute($limit, $offset);

		$rendered_list = Kostache::factory()->render(new View_Review_Product_Items($products));

		$this->response->body($rendered_list);
	}
}