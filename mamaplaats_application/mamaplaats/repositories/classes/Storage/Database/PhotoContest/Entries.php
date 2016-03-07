<?php

class Storage_Database_PhotoContest_Entries extends Storage_Database implements Repository_PhotoContest_Entries{
	protected $_table_name 		= 'photo_contest_entries';
	protected $_entity_class 	= 'Entity_PhotoContest_Entries';
}