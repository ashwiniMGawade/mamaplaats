<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-23 17:16:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post_ids ~ DOCROOT/mamaplaats/repositories/classes/Storage/Database/Win.php [ 141 ] in /var/www/mamaplaats_application/mamaplaats/repositories/classes/Storage/Database/Win.php:141
2015-07-23 17:16:24 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/repositories/classes/Storage/Database/Win.php(141): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/mamapl...', 141, Array)
#1 /var/www/mamaplaats_application/mamaplaats/business/classes/Usecase/User/GetsWinList.php(40): Storage_Database_Win->load_set_by_category_id(19, 20, 0, Array)
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Win.php(20): Usecase_User_GetsWinList->execute(Object(Entity_User), 'subscribed', 15, 0)
#3 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Win->action_subscribed()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Win))
#6 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#9 {main} in /var/www/mamaplaats_application/mamaplaats/repositories/classes/Storage/Database/Win.php:141