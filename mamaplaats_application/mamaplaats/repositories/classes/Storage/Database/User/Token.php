<?php

class Storage_Database_User_Token extends Storage_Database implements Repository_User_Token
{
	protected $_table_name = 'wp_user_tokens';
	protected $_entity_class = 'Entity_User_Token';
}