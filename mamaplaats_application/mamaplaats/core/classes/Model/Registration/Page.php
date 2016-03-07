<?php defined('SYSPATH') or die('No direct script access.');

class Model_Registration_Page extends AutoModeler_ORM
{
	protected $_table_name  = 'registration_pages';

	protected $_data = array(
		'id' 			=> NULL,
		'tag' 			=> 0,
		'title' 		=> '',
		'image' 		=> '',
	);

	public function __construct($id = NULL)
	{
		parent::__construct($id);

		if($this->ID === NULL AND $id !== NULL AND ! is_numeric($id))
		{
			$select = DB::select_array($this->fields())->where($this->_table_name.'.tag', '=', $id);
			$this->load($select);
		}
	}
}