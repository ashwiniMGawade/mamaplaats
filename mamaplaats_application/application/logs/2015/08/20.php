<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-20 09:12:17 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: ee570c9663dd3c74c754f ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-20 09:12:17 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-20 09:12:17 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: ee570c9663dd3c74c754f ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-20 09:12:17 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-20 13:31:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_User_Blog::$_repository_follower ~ DOCROOT/mamaplaats/core/classes/Controller/User/Blog.php [ 19 ] in /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php:19
2015-08-20 13:31:21 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/mamapl...', 19, Array)
#1 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#7 {main} in /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php:19
2015-08-20 15:50:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ DOCROOT/mamaplaats/message_handler/classes/View/Email/SendBlogCreationNotification.php [ 32 ] in file:line
2015-08-20 15:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-20 15:52:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ DOCROOT/mamaplaats/message_handler/classes/View/Email/SendBlogCreationNotification.php [ 32 ] in file:line
2015-08-20 15:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line