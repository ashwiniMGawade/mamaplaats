<?php

class Storage_Database_PhotoContest_Votes extends Storage_Database implements Repository_PhotoContest_Votes{
	protected $_table_name 		= 'photo_contest_votes';
	protected $_entity_class 	= 'Entity_PhotoContest_Votes';
}