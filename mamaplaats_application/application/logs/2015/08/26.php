<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-26 09:01:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Usecase_Admin_SendInstantBlogCreationMailToFollowers' not found ~ DOCROOT/mamaplaats/core/classes/Factory/Admin.php [ 39 ] in file:line
2015-08-26 09:01:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-26 09:34:25 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Factory_Admin::sends_instant_blog_creation_mail_to_followers() ~ DOCROOT/mamaplaats/core/classes/Task/Mail/SendInstantBlogCreationMailToFollower.php [ 14 ] in file:line
2015-08-26 09:34:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-26 09:40:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ DOCROOT/mamaplaats/message_handler/classes/View/Email/SendBlogCreationNotification.php [ 47 ] in file:line
2015-08-26 09:40:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-26 14:22:33 --- ERROR: ** [Airbrake] Failure: Unable to contact the Airbrake server - Request_Exception [ 0 ]: Error fetching remote http://test.mamaplaats.nl/notifier_api/v2/notices [ status 0 ] Operation timed out after 5 milliseconds with 0 out of 0 bytes received ~ SYSPATH/classes/Kohana/Request/Client/Curl.php [ 102 ] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:130
2015-08-26 14:22:33 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-26 14:22:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function load_set_advanced() on a non-object ~ DOCROOT/mamaplaats/business/classes/Usecase/Admin/SendBlogCreationNotification.php [ 73 ] in file:line
2015-08-26 14:22:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-26 14:39:14 --- INFO: ** [Airbrake] Success: Sent notification in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:136
2015-08-26 14:39:14 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-26 14:39:14 --- INFO: Response from Airbrake: 
<?xml version="1.0" encoding="UTF-8"?><notice><id>1495594320997548536</id><url>https://airbrake.io/locate/1495594320997548536</url></notice> in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:143
2015-08-26 14:39:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function load_set_advanced() on a non-object ~ DOCROOT/mamaplaats/business/classes/Usecase/Admin/SendBlogCreationNotification.php [ 73 ] in file:line
2015-08-26 14:39:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-26 14:41:32 --- INFO: ** [Airbrake] Success: Sent notification in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:136
2015-08-26 14:41:32 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-26 14:41:32 --- INFO: Response from Airbrake: 
<?xml version="1.0" encoding="UTF-8"?><notice><id>1495595478390571513</id><url>https://airbrake.io/locate/1495595478390571513</url></notice> in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:143
2015-08-26 14:41:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function load_set_advanced() on a non-object ~ DOCROOT/mamaplaats/business/classes/Usecase/Admin/SendBlogCreationNotification.php [ 73 ] in file:line
2015-08-26 14:41:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-26 15:18:34 --- INFO: ** [Airbrake] Success: Sent notification in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake/Sender.php:136
2015-08-26 15:18:34 --- INFO: Environment Info: [PHP: 5.5.9-1ubuntu4.9] [Kohana] [Env: production] in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:133
2015-08-26 15:18:34 --- INFO: Response from Airbrake: 
<?xml version="1.0" encoding="UTF-8"?><notice><id>1495614115436462598</id><url>https://airbrake.io/locate/1495614115436462598</url></notice> in /var/www/mamaplaats_application/modules/airbrake/classes/Kohana/Airbrake.php:143
2015-08-26 15:18:34 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function load_set_advanced() on a non-object ~ DOCROOT/mamaplaats/business/classes/Usecase/Admin/SendBlogCreationNotification.php [ 73 ] in file:line
2015-08-26 15:18:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line