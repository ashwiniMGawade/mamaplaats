<?php

class Storage_Database_User_Child extends Storage_Database_Translate implements Repository_User_Child
{
	protected $_table_name = 'wp_user_children';
	protected $_entity_class = 'Entity_User_Child';

	protected $_field_translate = array(
		'id' 					=> 'id',
		'user_id' 				=> 'user_id',
		'first_name'			=> 'first_name',
		'gender' 				=> 'gender',
		'birthdate' 			=> 'birthdate',
	);

}