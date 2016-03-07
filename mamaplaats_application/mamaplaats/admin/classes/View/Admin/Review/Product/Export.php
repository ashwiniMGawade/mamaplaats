<?php defined('SYSPATH') or die('No direct script access.');

class View_Admin_Review_Product_Export {

	private $_product;

	public function __construct($product)
	{
		$this->_product = $product;
	}

	public function details()
	{
		$excel_rows = "First Name\tMiddle Name\tLast Name\tEmail\tAnswer Extra 1\tAnswer Extra 2\tAnswer Extra 3\tQuestion Extra 1\tQuestion Extra 2\tQuestion Extra 3";
		if( ! empty($this->_product['product']->phone_access_field))
		{
			$excel_rows .= "\tPhone\tUse Phone";
		}
		$excel_rows .= "\n";

		if(isset($this->_product['reviews']) AND ! empty($this->_product['reviews']))
		{
			foreach ($this->_product['reviews'] as $review)
			{
				$excel_rows .= $review['user']->first_name."\t";
				$excel_rows .= $review['user']->middle_name."\t";
				$excel_rows .= $review['user']->last_name."\t";
				$excel_rows .= $review['user']->email."\t";
				$excel_rows .= addcslashes($review['review']->answer_extra1, "/\r|\n/")."\t";
				$excel_rows .= addcslashes($review['review']->answer_extra2, "/\r|\n/")."\t";
				$excel_rows .= addcslashes($review['review']->answer_extra3, "/\r|\n/")."\t";
				$excel_rows .= addcslashes($this->_product['product']->question_extra1, "/\r|\n/")."\t";
				$excel_rows .= addcslashes($this->_product['product']->question_extra2, "/\r|\n/")."\t";

				if( ! empty($this->_product['product']->phone_access_field))
				{
					$excel_rows .= addcslashes($this->_product['product']->question_extra3, "/\r|\n/")."\t";
					$excel_rows .= $review['review']->answer_phone."\t";
					$excel_rows .= ( ! empty($review['review']->phone_access)) ? 'Yes' : 'No';
				}
				else
				{
					$excel_rows .= addcslashes($this->_product['product']->question_extra3, "/\r|\n/");
				}

				$excel_rows .= "\n";
			}
		}

		return $excel_rows;
	}
}