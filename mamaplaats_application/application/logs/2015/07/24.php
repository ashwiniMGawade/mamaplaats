<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-24 14:33:31 --- EMERGENCY: Exception [ 0 ]: This blog does not exist ~ DOCROOT/mamaplaats/business/classes/Usecase/User/GetsOwnBlog.php [ 34 ] in /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php:20
2015-07-24 14:33:31 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(20): Usecase_User_GetsOwnBlog->execute(Object(Entity_User), '12')
#1 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#7 {main} in /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php:20