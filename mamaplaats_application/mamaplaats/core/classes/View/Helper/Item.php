<?php

trait View_Helper_Item {

	private $_item_header = array (
		'blog' => 'Van het blog',
		'page' => 'Expert advies',
		'review_product' => 'Review',
	);

	private $_item_link = array(
		'blog' => 'blog',
		'page' => '',
		'review_product' => 'review',
	);


	protected function prepare_item_list($item_list)
	{
		$prepared_item_list = array();
		foreach ($item_list as $item)
		{
			$item = $this->_prepare_item($item);
			$prepared_item_list[] = $item;
		}

		return $prepared_item_list;
	}

	private function _prepare_item($item)
	{
		$item['content'] = $this->_prepare_item_content($item['content']);
		return $item;
	}

	private function _prepare_item_content($content)
	{
		$content['item_link'] 	= $this->_item_link[$content['type']];
		$content['item_header'] = $this->_item_header[$content['type']];
		return $content;
	}
}