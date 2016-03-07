<?php

class Storage_Database_PhotoContest extends Storage_Database implements Repository_PhotoContest{
	protected $_table_name 		= 'photo_contests';
	protected $_entity_class 	= 'Entity_PhotoContests';
}
