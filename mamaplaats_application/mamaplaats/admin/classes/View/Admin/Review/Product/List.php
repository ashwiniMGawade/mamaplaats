<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Review_Product_List {

	/**
	 * @var array The contest object
	 */
	protected $_product_list;

	public function __construct(array $product_list)
	{
		$this->_product_list = $product_list;
	}

	public function product_list()
	{
		return $this->_product_list;
	}
}