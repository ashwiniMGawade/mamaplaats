<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-27 11:05:56 --- INFO: ** [Airbrake] Success: Sent notification in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:136
2015-08-27 11:05:56 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-27 11:05:56 --- INFO: Response from Airbrake: 
<?xml version="1.0" encoding="UTF-8"?><notice><id>1496211723552983192</id><url>https://airbrake.io/locate/1496211723552983192</url></notice> in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:143
2015-08-27 11:05:56 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function get_followers() on a non-object ~ DOCROOT/mamaplaats/business/classes/Usecase/Admin/SendBlogCreationNotification.php [ 37 ] in file:line
2015-08-27 11:05:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-27 11:16:57 --- ERROR: ** [Airbrake] Failure: Unable to contact the Airbrake server - Request_Exception [ 0 ]: Error fetching remote http://test.mamaplaats.nl/notifier_api/v2/notices [ status 0 ] Operation timed out after 0 milliseconds with 0 out of 0 bytes received ~ SYSPATH/classes/Kohana/Request/Client/Curl.php [ 102 ] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:130
2015-08-27 11:16:57 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-27 11:16:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Usecase_Admin_SendsNewBlogNotification' not found ~ DOCROOT/tests/unit/SendBlogCreationNotificationTest.php [ 11 ] in file:line
2015-08-27 11:16:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-27 11:17:39 --- INFO: ** [Airbrake] Success: Sent notification in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:136
2015-08-27 11:17:39 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-27 11:17:39 --- INFO: Response from Airbrake: 
<?xml version="1.0" encoding="UTF-8"?><notice><id>1496217622170470560</id><url>https://airbrake.io/locate/1496217622170470560</url></notice> in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:143
2015-08-27 11:17:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Usecase_Admin_SendsNewBlogNotification' not found ~ DOCROOT/tests/unit/SendBlogCreationNotificationTest.php [ 11 ] in file:line
2015-08-27 11:17:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line